<?php

namespace App\Http\Controllers\admin\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pedidos;
use DB;

class PedidosController extends Controller
{
    
    public function listar()
    {
        // busca todos os pedidos e mostra  
        return Pedidos::All();
    }

    public function salvar(Request $req)
    {
        // insere pedidos 
        return Pedidos::create($req->all());
    }

    public function atualizar(Request $request, $id)
    {
        // busca pelo pedidos e atualiza
        $Pedido = Pedidos::findOrFail($id);
        $Pedido->update($request->all()); 
    }

    public function excluir($id)
    {
        // busca pelo pedidos e exclui
        $Pedido = Pedidos::findOrFail($id);
        $Pedido->delete(); 
    }

    public function procurar($id)
    {
        // busca pelo pedidos e mostra
        return Pedidos::findOrFail($id);
    }

    public function docliente($id)
    {
        // busca todos os pedidos do cliente
        $linhas = DB::select("SELECT * from pedidos where id_cliente = $id");
    
        // converte o array em json e retorna
        return response($linhas);
    }

}
