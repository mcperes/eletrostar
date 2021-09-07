<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('produtos', function(Blueprint $table) {
			$table->foreign('id_unidade')->references('id_unidade')->on('unidades')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('pedidos', function(Blueprint $table) {
			$table->foreign('id_cliente')->references('id_cliente')->on('clientes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('itensPedidos', function(Blueprint $table) {
			$table->foreign('id_pedido')->references('id_pedido')->on('pedidos')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('itensPedidos', function(Blueprint $table) {
			$table->foreign('id_produto')->references('id_produto')->on('produtos')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('produtos', function(Blueprint $table) {
			$table->dropForeign('produtos_id_unidade_foreign');
		});
		Schema::table('pedidos', function(Blueprint $table) {
			$table->dropForeign('pedidos_id_cliente_foreign');
		});
		Schema::table('itensPedidos', function(Blueprint $table) {
			$table->dropForeign('itensPedidos_id_pedido_foreign');
		});
		Schema::table('itensPedidos', function(Blueprint $table) {
			$table->dropForeign('itensPedidos_id_produto_foreign');
		});
	}
}