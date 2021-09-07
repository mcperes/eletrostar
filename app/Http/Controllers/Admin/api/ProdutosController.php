<?php

namespace App\Http\Controllers\admin\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produtos;

class ProdutosController extends Controller
{
    
    public function listar()
    {
        // busca todos os produtos e mostra  
        return Produtos::All();
    }

    public function salvar(Request $req)
    {
        // insere produto 
        return Produtos::create($req->all());
    }

    public function atualizar(Request $request, $id)
    {
        // busca pelo produto e atualiza
        $Produto = Produtos::findOrFail($id);
        $Produto->update($request->all()); 
    }

    public function excluir($id)
    {
        // busca pelo produto e exclui
        $Produto = Produtos::findOrFail($id);
        $Produto->delete(); 

    }

    public function procurar($id)
    {
        // busca pelo produto e mostra
        return Produtos::findOrFail($id);
    }
}
