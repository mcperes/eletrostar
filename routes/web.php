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

// abaixo rotas de login
Route::get('/', ['as'=>'site.home', 'uses'=>'site\HomeController@index']);
Route::get('/login', ['as'=>'site.login', 'uses'=>'site\LoginController@index']);
Route::post('/login/entrar', ['as'=>'site.login.entrar', 'uses'=>'site\LoginController@entrar']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses'=>'site\LoginController@sair']);

// as rotas abaixo sao protegidas e sao acessiveis apenas se logado
Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/produtos',               ['as'=>'admin.produtos','uses'=>'admin\ProdutosController@index']);
    Route::get('/admin/produtos/adicionar',     ['as'=>'admin.produtos.adicionar','uses'=>'admin\ProdutosController@adicionar']);
    Route::post('/admin/produtos/salvar',       ['as'=>'admin.produtos.salvar','uses'=>'admin\ProdutosController@salvar']);
    Route::get('/admin/produtos/editar/{id}',   ['as'=>'admin.produtos.editar','uses'=>'admin\ProdutosController@editar']);
    Route::get('/admin/produtos/excluir/{id}',  ['as'=>'admin.produtos.excluir','uses'=>'admin\ProdutosController@excluir']);
    Route::put('/admin/produtos/atualizar/{id}',['as'=>'admin.produtos.atualizar','uses'=>'admin\ProdutosController@atualizar']);
    
    Route::get('/admin/unidades',               ['as'=>'admin.unidades','uses'=>'admin\UnidadesController@index']);
    Route::get('/admin/unidades/adicionar',     ['as'=>'admin.unidades.adicionar','uses'=>'admin\UnidadesController@adicionar']);
    Route::post('/admin/unidades/salvar',       ['as'=>'admin.unidades.salvar','uses'=>'admin\UnidadesController@salvar']);
    Route::get('/admin/unidades/editar/{id}',   ['as'=>'admin.unidades.editar','uses'=>'admin\UnidadesController@editar']);
    Route::get('/admin/unidades/excluir/{id}',  ['as'=>'admin.unidades.excluir','uses'=>'admin\UnidadesController@excluir']);
    Route::put('/admin/unidades/atualizar/{id}',['as'=>'admin.unidades.atualizar','uses'=>'admin\UnidadesController@atualizar']);
    
    Route::get('/admin/clientes',               ['as'=>'admin.clientes','uses'=>'admin\ClientesController@index']);
    Route::get('/admin/clientes/adicionar',     ['as'=>'admin.clientes.adicionar','uses'=>'admin\ClientesController@adicionar']);
    Route::post('/admin/clientes/salvar',       ['as'=>'admin.clientes.salvar','uses'=>'admin\ClientesController@salvar']);
    Route::get('/admin/clientes/editar/{id}',   ['as'=>'admin.clientes.editar','uses'=>'admin\ClientesController@editar']);
    Route::get('/admin/clientes/excluir/{id}',  ['as'=>'admin.clientes.excluir','uses'=>'admin\ClientesController@excluir']);
    Route::put('/admin/clientes/atualizar/{id}',['as'=>'admin.clientes.atualizar','uses'=>'admin\ClientesController@atualizar']);
    
    Route::get('/admin/pedidos',               ['as'=>'admin.pedidos','uses'=>'admin\PedidosController@index']);
    Route::get('/admin/pedidos/adicionar',     ['as'=>'admin.pedidos.adicionar','uses'=>'admin\PedidosController@adicionar']);
    Route::post('/admin/pedidos/salvar',       ['as'=>'admin.pedidos.salvar','uses'=>'admin\PedidosController@salvar']);
    Route::get('/admin/pedidos/editar/{id}',   ['as'=>'admin.pedidos.editar','uses'=>'admin\PedidosController@editar']);
    Route::get('/admin/pedidos/excluir/{id}',  ['as'=>'admin.pedidos.excluir','uses'=>'admin\PedidosController@excluir']);
    Route::put('/admin/pedidos/atualizar/{id}',['as'=>'admin.pedidos.atualizar','uses'=>'admin\PedidosController@atualizar']);
    
    Route::get('/admin/itenspedidos/listar/{id}',   ['as'=>'admin.itenspedidos.listar','uses'=>'admin\ItensPedidosController@listar']);
    Route::get('/admin/itenspedidos/adicionar/{id}',['as'=>'admin.itenspedidos.adicionar','uses'=>'admin\ItensPedidosController@adicionar']);
    Route::post('/admin/itenspedidos/salvar/{id}',  ['as'=>'admin.itenspedidos.salvar','uses'=>'admin\ItensPedidosController@salvar']);
    Route::get('/admin/itenspedidos/editar/{id}',   ['as'=>'admin.itenspedidos.editar','uses'=>'admin\ItensPedidosController@editar']);
    Route::get('/admin/itenspedidos/excluir/{id}',  ['as'=>'admin.itenspedidos.excluir','uses'=>'admin\ItensPedidosController@excluir']);
    Route::put('/admin/itenspedidos/atualizar/{id}',['as'=>'admin.itenspedidos.atualizar','uses'=>'admin\ItensPedidosController@atualizar']);
    
});


