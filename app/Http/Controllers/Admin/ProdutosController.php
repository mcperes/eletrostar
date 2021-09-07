<?php 

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Produtos;
use App\Unidades;

class ProdutosController extends Controller 
{
  public function index() {

    $linhas = DB::select("SELECT produtos.*,unidades.descricao as uniddesc  
             from produtos inner join unidades on 
             produtos.id_unidade=unidades.id_unidade  
             order by produtos.descricao");
    return view('admin.produtos.index',compact('linhas'));
  } 

  public function adicionar () {
    $LookUnidades = Unidades::all(['id_unidade','descricao']);
    return view('admin.produtos.adicionar',compact('LookUnidades'));
  }

  public function salvar(Request $req)
  {
    $dados = $req->all();
    Produtos::create($dados);
    return redirect()->route('admin.produtos');
  }

  public function editar($id) {
     $linha = Produtos::find($id);
     $LookUnidades = Unidades::all(['id_unidade','descricao']);     
     return view('admin.produtos.editar',compact('linha','LookUnidades'));
  }

  public function excluir($id) {
    Produtos::find($id)->delete();
    return redirect()->route('admin.produtos');
  }

  public function atualizar(Request $req, $id)
  {
    $dados = $req->all();
    Produtos::find($id)->update($dados);
    return redirect()->route('admin.produtos');
  }
  
}

?>