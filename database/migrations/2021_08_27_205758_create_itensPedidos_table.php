<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItensPedidosTable extends Migration {

	public function up()
	{
		Schema::create('itensPedidos', function(Blueprint $table) {
			$table->integer('id_pedido')->unsigned();
			$table->increments('id_item', true);
			$table->integer('id_produto')->unsigned();
			$table->integer('qtd');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('itensPedidos');
	}
}