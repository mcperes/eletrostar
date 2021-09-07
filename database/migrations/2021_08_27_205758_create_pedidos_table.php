<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePedidosTable extends Migration {

	public function up()
	{
		Schema::create('pedidos', function(Blueprint $table) {
			$table->increments('id_pedido');
			$table->datetime('data');
			$table->integer('id_cliente')->unsigned();
			$table->timestamps();
			$table->float('total');
		});
	}

	public function down()
	{
		Schema::drop('pedidos');
	}
}