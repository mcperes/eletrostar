<?php
use Illuminate\Support\Facades\Route;

// chamadas da endpoint produtos
Route::get ('/produtos',               ['as'=>'admin.api.produtos','uses'=>'admin\api\ProdutosController@listar']);
Route::post('/produtos/salvar',        ['as'=>'admin.api.produtos.salvar','uses'=>'admin\api\ProdutosController@salvar']);
Route::put ('/produtos/atualizar/{id}',['as'=>'admin.api.produtos.atualizar','uses'=>'admin\api\ProdutosController@atualizar']);
Route::get ('/produtos/excluir/{id}',  ['as'=>'admin.api.produtos.excluir','uses'=>'admin\api\ProdutosController@excluir']);
Route::get ('/produtos/procurar/{id}', ['as'=>'admin.api.produtos.procurar','uses'=>'admin\api\ProdutosController@procurar']);

// chamadas da endpoint pedidos
Route::get ('/pedidos',               ['as'=>'admin.api.pedidos','uses'=>'admin\api\PedidosController@listar']);
Route::post('/pedidos/salvar',        ['as'=>'admin.api.pedidos.salvar','uses'=>'admin\api\PedidosController@salvar']);
Route::put ('/pedidos/atualizar/{id}',['as'=>'admin.api.pedidos.atualizar','uses'=>'admin\api\PedidosController@atualizar']);
Route::get ('/pedidos/excluir/{id}',  ['as'=>'admin.api.pedidos.excluir','uses'=>'admin\api\PedidosController@excluir']);
Route::get ('/pedidos/procurar/{id}', ['as'=>'admin.api.pedidos.procurar','uses'=>'admin\api\PedidosController@procurar']);
Route::get ('/pedidos/docliente/{id}',['as'=>'admin.api.pedidos.docliente','uses'=>'admin\api\PedidosController@docliente']);

// chamadas da endpoint itenspedidos
Route::get ('/itenspedidos',               ['as'=>'admin.api.itenspedidos','uses'=>'admin\api\ItenspedidosController@listar']);
Route::post('/itenspedidos/salvar',        ['as'=>'admin.api.itenspedidos.salvar','uses'=>'admin\api\ItenspedidosController@salvar']);
Route::put ('/itenspedidos/atualizar/{id}',['as'=>'admin.api.itenspedidos.atualizar','uses'=>'admin\api\ItenspedidosController@atualizar']);
Route::get ('/itenspedidos/excluir/{id}',  ['as'=>'admin.api.itenspedidos.excluir','uses'=>'admin\api\ItenspedidosController@excluir']);
Route::get ('/itenspedidos/procurar/{id}', ['as'=>'admin.api.itenspedidos.procurar','uses'=>'admin\api\ItenspedidosController@procurar']);
Route::get ('/itenspedidos/dopedido/{id}', ['as'=>'admin.api.itenspedidos.dopedido','uses'=>'admin\api\ItenspedidosController@dopedido']);

// chamadas da endpoint clientes
Route::get ('/clientes',               ['as'=>'admin.api.clientes','uses'=>'admin\api\ClientesController@listar']);
Route::post('/clientes/salvar',        ['as'=>'admin.api.clientes.salvar','uses'=>'admin\api\ClientesController@salvar']);
Route::put ('/clientes/atualizar/{id}',['as'=>'admin.api.clientes.atualizar','uses'=>'admin\api\ClientesController@atualizar']);
Route::get ('/clientes/excluir/{id}',  ['as'=>'admin.api.clientes.excluir','uses'=>'admin\api\ClientesController@excluir']);
Route::get ('/clientes/procurar/{id}', ['as'=>'admin.api.clientes.procurar','uses'=>'admin\api\ClientesController@procurar']);


    