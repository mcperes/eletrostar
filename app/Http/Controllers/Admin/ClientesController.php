<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clientes;
use DB;   //  requer essa classe quando usa frase sql

class ClientesController extends Controller 
{
  public function index() {
    $linhas = DB::select("select * from clientes order by nome");
    return view('admin.clientes.index',compact('linhas'));
  } 

  public function adicionar () {
    return view('admin.clientes.adicionar');
  }

  public function salvar(Request $req)  {
    $dados = $req->all();
    Clientes::create($dados); // equivale a insert
    return redirect()->route('admin.clientes');
  }

  public function editar($id) {
     $linha = Clientes::find($id);
     return view('admin.clientes.editar',compact('linha'));
  }

  public function excluir($id) {
    Clientes::find($id)->delete();  // equivale a delete
    return redirect()->route('admin.clientes');
  }

  public function atualizar(Request $req, $id)  {
    $dados = $req->all();
    Clientes::find($id)->update($dados);  // equivale a update sql
    return redirect()->route('admin.clientes');
  }
  
}

?>