<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@index']);
Route::get('/login', ['as'=>'site.login', 'uses'=>'Site\LoginController@index']);
Route::post('/login/entrar', ['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses'=>'Site\LoginController@sair']);

Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/produtos',               ['as'=>'admin.produtos','uses'=>'Admin\ProdutosController@index']);
    Route::get('/admin/produtos/adicionar',     ['as'=>'admin.produtos.adicionar','uses'=>'Admin\ProdutosController@adicionar']);
    Route::post('/admin/produtos/salvar',       ['as'=>'admin.produtos.salvar','uses'=>'Admin\ProdutosController@salvar']);
    Route::get('/admin/produtos/editar/{id}',   ['as'=>'admin.produtos.editar','uses'=>'Admin\ProdutosController@editar']);
    Route::get('/admin/produtos/excluir/{id}',  ['as'=>'admin.produtos.excluir','uses'=>'Admin\ProdutosController@excluir']);
    Route::put('/admin/produtos/atualizar/{id}',['as'=>'admin.produtos.atualizar','uses'=>'Admin\ProdutosController@atualizar']);
    
    Route::get('/admin/unidades',               ['as'=>'admin.unidades','uses'=>'Admin\UnidadesController@index']);
    Route::get('/admin/unidades/adicionar',     ['as'=>'admin.unidades.adicionar','uses'=>'Admin\UnidadesController@adicionar']);
    Route::post('/admin/unidades/salvar',       ['as'=>'admin.unidades.salvar','uses'=>'Admin\UnidadesController@salvar']);
    Route::get('/admin/unidades/editar/{id}',   ['as'=>'admin.unidades.editar','uses'=>'Admin\UnidadesController@editar']);
    Route::get('/admin/unidades/excluir/{id}',  ['as'=>'admin.unidades.excluir','uses'=>'Admin\UnidadesController@excluir']);
    Route::put('/admin/unidades/atualizar/{id}',['as'=>'admin.unidades.atualizar','uses'=>'Admin\UnidadesController@atualizar']);
    
    Route::get('/admin/clientes',               ['as'=>'admin.clientes','uses'=>'Admin\ClientesController@index']);
    Route::get('/admin/clientes/adicionar',     ['as'=>'admin.clientes.adicionar','uses'=>'Admin\ClientesController@adicionar']);
    Route::post('/admin/clientes/salvar',       ['as'=>'admin.clientes.salvar','uses'=>'Admin\ClientesController@salvar']);
    Route::get('/admin/clientes/editar/{id}',   ['as'=>'admin.clientes.editar','uses'=>'Admin\ClientesController@editar']);
    Route::get('/admin/clientes/excluir/{id}',  ['as'=>'admin.clientes.excluir','uses'=>'Admin\ClientesController@excluir']);
    Route::put('/admin/clientes/atualizar/{id}',['as'=>'admin.clientes.atualizar','uses'=>'Admin\ClientesController@atualizar']);
    
    Route::get('/admin/pedidos',               ['as'=>'admin.pedidos','uses'=>'Admin\PedidosController@index']);
    Route::get('/admin/pedidos/adicionar',     ['as'=>'admin.pedidos.adicionar','uses'=>'Admin\PedidosController@adicionar']);
    Route::post('/admin/pedidos/salvar',       ['as'=>'admin.pedidos.salvar','uses'=>'Admin\PedidosController@salvar']);
    Route::get('/admin/pedidos/editar/{id}',   ['as'=>'admin.pedidos.editar','uses'=>'Admin\PedidosController@editar']);
    Route::get('/admin/pedidos/excluir/{id}',  ['as'=>'admin.pedidos.excluir','uses'=>'Admin\PedidosController@excluir']);
    Route::put('/admin/pedidos/atualizar/{id}',['as'=>'admin.pedidos.atualizar','uses'=>'Admin\PedidosController@atualizar']);
    
    Route::get('/admin/itenspedidos/listar/{id}',   ['as'=>'admin.itenspedidos.listar','uses'=>'Admin\ItensPedidosController@listar']);
    Route::get('/admin/itenspedidos/adicionar/{id}',['as'=>'admin.itenspedidos.adicionar','uses'=>'Admin\ItensPedidosController@adicionar']);
    Route::post('/admin/itenspedidos/salvar/{id}',  ['as'=>'admin.itenspedidos.salvar','uses'=>'Admin\ItensPedidosController@salvar']);
    Route::get('/admin/itenspedidos/editar/{id}',   ['as'=>'admin.itenspedidos.editar','uses'=>'Admin\ItensPedidosController@editar']);
    Route::get('/admin/itenspedidos/excluir/{id}',  ['as'=>'admin.itenspedidos.excluir','uses'=>'Admin\ItensPedidosController@excluir']);
    Route::put('/admin/itenspedidos/atualizar/{id}',['as'=>'admin.itenspedidos.atualizar','uses'=>'Admin\ItensPedidosController@atualizar']);
    
});


