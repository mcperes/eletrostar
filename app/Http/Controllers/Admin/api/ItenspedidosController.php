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
        // busca todos os itens e mostra  
        return ItensPedidos::All();
    }

    public function salvar(Request $req)
    {
        // insere itens 
        return ItensPedidos::create($req->all());
    }

    public function atualizar(Request $request, $id)
    {
        // busca pelo itens e atualiza
        $ItensPedido = ItensPedidos::findOrFail($id);
        $ItensPedido->update($request->all()); 
    }

    public function excluir($id)
    {
        // busca pelo itens e exclui
        $ItensPedido = ItensPedidos::findOrFail($id);
        $ItensPedido->delete(); 

    }

    public function procurar($id)
    {
        // busca pelo itens e mostra
        return ItensPedidos::findOrFail($id);
    }

    public function dopedido($id)
    {
        // busca todos os itens de pedidos do cliente
        $linhas = DB::select("SELECT * from itenspedidos 
                  where id_pedido = $id");
    
        // converte o array em json e retorna
        return response($linhas);
    }    
}
