<?php
use Illuminate\Support\Facades\Route;

// rotas de api

Route::get ('/produtos',               ['as'=>'admin.api.produtos','uses'=>'Admin\api\ProdutosController@listar']);
Route::post('/produtos/salvar',        ['as'=>'admin.api.produtos.salvar','uses'=>'Admin\api\ProdutosController@salvar']);
Route::put ('/produtos/atualizar/{id}',['as'=>'admin.api.produtos.atualizar','uses'=>'Admin\api\ProdutosController@atualizar']);
Route::get ('/produtos/excluir/{id}',  ['as'=>'admin.api.produtos.excluir','uses'=>'Admin\api\ProdutosController@excluir']);
Route::get ('/produtos/procurar/{id}', ['as'=>'admin.api.produtos.procurar','uses'=>'Admin\api\ProdutosController@procurar']);

Route::get ('/pedidos',               ['as'=>'admin.api.pedidos','uses'=>'Admin\api\PedidosController@listar']);
Route::post('/pedidos/salvar',        ['as'=>'admin.api.pedidos.salvar','uses'=>'Admin\api\PedidosController@salvar']);
Route::put ('/pedidos/atualizar/{id}',['as'=>'admin.api.pedidos.atualizar','uses'=>'Admin\api\PedidosController@atualizar']);
Route::get ('/pedidos/excluir/{id}',  ['as'=>'admin.api.pedidos.excluir','uses'=>'Admin\api\PedidosController@excluir']);
Route::get ('/pedidos/procurar/{id}', ['as'=>'admin.api.pedidos.procurar','uses'=>'Admin\api\PedidosController@procurar']);
Route::get ('/pedidos/docliente/{id}',['as'=>'admin.api.pedidos.docliente','uses'=>'Admin\api\PedidosController@docliente']);

Route::get ('/itenspedidos',               ['as'=>'admin.api.itenspedidos','uses'=>'Admin\api\ItenspedidosController@listar']);
Route::post('/itenspedidos/salvar',        ['as'=>'admin.api.itenspedidos.salvar','uses'=>'Admin\api\ItenspedidosController@salvar']);
Route::put ('/itenspedidos/atualizar/{id}',['as'=>'admin.api.itenspedidos.atualizar','uses'=>'Admin\api\ItenspedidosController@atualizar']);
Route::get ('/itenspedidos/excluir/{id}',  ['as'=>'admin.api.itenspedidos.excluir','uses'=>'Admin\api\ItenspedidosController@excluir']);
Route::get ('/itenspedidos/procurar/{id}', ['as'=>'admin.api.itenspedidos.procurar','uses'=>'Admin\api\ItenspedidosController@procurar']);
Route::get ('/itenspedidos/dopedido/{id}', ['as'=>'admin.api.itenspedidos.dopedido','uses'=>'Admin\api\ItenspedidosController@dopedido']);

Route::get ('/clientes',               ['as'=>'admin.api.clientes','uses'=>'Admin\api\ClientesController@listar']);
Route::post('/clientes/salvar',        ['as'=>'admin.api.clientes.salvar','uses'=>'Admin\api\ClientesController@salvar']);
Route::put ('/clientes/atualizar/{id}',['as'=>'admin.api.clientes.atualizar','uses'=>'Admin\api\ClientesController@atualizar']);
Route::get ('/clientes/excluir/{id}',  ['as'=>'admin.api.clientes.excluir','uses'=>'Admin\api\ClientesController@excluir']);
Route::get ('/clientes/procurar/{id}', ['as'=>'admin.api.clientes.procurar','uses'=>'Admin\api\ClientesController@procurar']);


    