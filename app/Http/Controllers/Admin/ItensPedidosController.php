<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ItensPedidos;
use App\Produtos;
use DB;

class ItensPedidosController extends Controller 
{
  public function listar($id) {
    
    $valpedidos = DB::select("SELECT pedidos.id_pedido, pedidos.data, clientes.nome 
        from pedidos inner join clientes on clientes.id_cliente=pedidos.id_cliente          
        where pedidos.id_pedido = $id");  
    
    $items = DB::select("SELECT itenspedidos.id_pedido, itenspedidos.id_item, itenspedidos.id_produto, 
          produtos.descricao, unidades.descricao as uniddesc, itenspedidos.qtd, produtos.valor, 
          produtos.valor*itenspedidos.qtd as valitem, produtos.referencia  
        from itenspedidos inner join produtos on produtos.id_produto=itenspedidos.id_produto inner join 
          unidades on unidades.id_unidade=produtos.id_unidade  
        where itenspedidos.id_pedido = $id order by itenspedidos.id_item");  
      
    //dd($valpedidos);
    
    $descpedido = $valpedidos[0]->id_pedido." - ".date('d/m/y', strtotime($valpedidos[0]->data));
    $nomecliente = $valpedidos[0]->nome;

    return view('admin.itenspedidos.index',compact('items','descpedido','nomecliente'));
  } 

  public function adicionar ($id) {
    $LookProdutos = Produtos::all(['id_produto','descricao']); 
    $id_pedido = $id;
    return view('admin.itenspedidos.adicionar',compact('LookProdutos','id_pedido'));
  }

  public function salvar(Request $req, $id_pedido)
  {
    $dados = $req->all();
    
    $dados = array_add($dados, 'id_pedido', $id_pedido);
       ItensPedidos::create($dados);
    $id_pedido = $dados['id_pedido'];
    return redirect()->route('admin.itenspedidos.listar','id_pedido');
  }

  public function editar($id) {
     $linha = ItensPedidos::find($id);
     $LookProdutos = Produtos::all(['id_produto','descricao']); 
     return view('admin.itenspedidos.editar',compact('linha','LookProdutos'));
  }

  public function excluir($id) {

    $ItemPedido = ItensPedidos::find($id);
    $id_pedido = $ItemPedido->id_pedido;
    $ItemPedido->delete();
    return redirect()->route('admin.itenspedidos.listar',compact('id_pedido'));
  }

  public function atualizar(Request $req, $id)
  {
    $dados = $req->all();
    $ItemPedido = ItensPedidos::find($id);
    $id_pedido = $ItemPedido->id_pedido;
    //dd($id_pedido);    
    $ItemPedido->update($dados);
    return redirect()->route('admin.itenspedidos.listar',compact('id_pedido'));
  }
  
}
?>