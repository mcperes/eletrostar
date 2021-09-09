<?php

namespace App\Http\Controllers\admin\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clientes;

class ClientesController extends Controller
{
    
    public function listar()
    {
        // busca todos os clientes e mostra  
        return Clientes::All();
    }

    public function salvar(Request $req)
    {
        // insere cliente 
        return Clientes::create($req->all());
    }

    public function atualizar(Request $request, $id)
    {
        // busca pelo cliente e atualiza
        $Cliente = Clientes::findOrFail($id);
        $Cliente->update($request->all()); 
    }

    public function excluir($id)
    {
        // busca pelo cliente e exclui
        $Cliente = Clientes::findOrFail($id);
        $Cliente->delete(); 

    }

    public function procurar($id)
    {
        // busca pelo cliente e mostra
        return Clientes::findOrFail($id);
    }
}
