<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Pedidos;
use App\Clientes;


class PedidosController extends Controller 
{
  public function index() {

   // essa linha cria o gride de pedidos, repare
   // que ele faz a somatoria de todos os sub totais
   // calculando na hora   
   $linhas = DB::select("SELECT pedidos.id_pedido,pedidos.id_cliente,pedidos.data,clientes.nome, 
                 sum(itenspedidos.qtd * produtos.valor) as pedtotal   
             from pedidos inner join clientes on 
                 clientes.id_cliente=pedidos.id_cliente  
             inner join itenspedidos on itenspedidos.id_pedido=pedidos.id_pedido 
             inner join produtos on produtos.id_produto=itenspedidos.id_produto 
             group by clientes.nome, pedidos.id_pedido, pedidos.id_cliente, pedidos.data 
             order by pedidos.data desc");

    //dd($linhas);
    return view('admin.pedidos.index',compact('linhas'));
  } 

  public function adicionar () {
    // repare que o look de clientes será usado para selecionar o 
    // cliente do pedido no form select 
    $LookClientes = Clientes::all(['id_cliente','nome']);
    return view('admin.pedidos.adicionar', compact('LookClientes'));
  }

  public function salvar(Request $req)
  {
    $dados = $req->all();
    Pedidos::create($dados);
    return redirect()->route('admin.pedidos');
  }

  public function editar($id) {
     $linha = Pedidos::find($id);
     $LookClientes = Clientes::all(['id_cliente','nome']);
     return view('admin.pedidos.editar',compact('linha','LookClientes'));
  }

  public function excluir($id) {
    Pedidos::find($id)->delete();
    return redirect()->route('admin.pedidos');
  }

  public function atualizar(Request $req, $id)
  {
    $dados = $req->all();
    Pedidos::find($id)->update($dados);
    return redirect()->route('admin.pedidos');
  }
  
}
?>