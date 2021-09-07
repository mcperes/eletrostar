<?php

namespace App\Http\Controllers\admin\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clientes;

class ClientesController extends Controller
{
    
    public function listar()
    {
        // busca todos os produtos e mostra  
        return Clientes::All();
    }

    public function salvar(Request $req)
    {
        // insere produto 
        return Clientes::create($req->all());
    }

    public function atualizar(Request $request, $id)
    {
        // busca pelo produto e atualiza
        $Cliente = Clientes::findOrFail($id);
        $Cliente->update($request->all()); 
    }

    public function excluir($id)
    {
        // busca pelo produto e exclui
        $Cliente = Clientes::findOrFail($id);
        $Cliente->delete(); 

    }

    public function procurar($id)
    {
        // busca pelo produto e mostra
        return Clientes::findOrFail($id);
    }
}
