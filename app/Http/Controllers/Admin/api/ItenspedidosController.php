<?php

namespace App\Http\Controllers\admin\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ItensPedidos;
use DB;

class ItenspedidosController extends Controller
{
    
    public function listar()
    {
        // busca todos os produtos e mostra  
        return ItensPedidos::All();
    }

    public function salvar(Request $req)
    {
        // insere produto 
        return ItensPedidos::create($req->all());
    }

    public function atualizar(Request $request, $id)
    {
        // busca pelo produto e atualiza
        $ItensPedido = ItensPedidos::findOrFail($id);
        $ItensPedido->update($request->all()); 
    }

    public function excluir($id)
    {
        // busca pelo produto e exclui
        $ItensPedido = ItensPedidos::findOrFail($id);
        $ItensPedido->delete(); 

    }

    public function procurar($id)
    {
        // busca pelo produto e mostra
        return ItensPedidos::findOrFail($id);
    }

    public function dopedido($id)
    {
        // busca todos os itens de pedidos do cliente
        $linhas = DB::select("SELECT * from itenspedidos where id_pedido = $id");
    
        // converte o array em json e retorna
        return response($linhas);
    }    
}
