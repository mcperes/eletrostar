<?php 

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Unidades;

class UnidadesController extends Controller 
{
  public function index() {
    $linhas = Unidades::all();
    return view('admin.unidades.index',compact('linhas'));
  } 

  public function adicionar () {
    return view('admin.unidades.adicionar');
  }

  public function salvar(Request $req)
  {
    $dados = $req->all();
    Unidades::create($dados);
    return redirect()->route('admin.unidades');
  }

  public function editar($id) {
     $linha = Unidades::find($id);
     return view('admin.unidades.editar',compact('linha'));
  }

  public function excluir($id) {
    Unidades::find($id)->delete();
    return redirect()->route('admin.unidades');
  }

  public function atualizar(Request $req, $id)
  {
    $dados = $req->all();
    Unidades::find($id)->update($dados);
    return redirect()->route('admin.unidades');
  }
  
}

?>