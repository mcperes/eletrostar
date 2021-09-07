<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration {

	public function up()
	{
		Schema::create('clientes', function(Blueprint $table) {
			$table->increments('id_cliente', true);
			$table->timestamps();
			$table->string('nome', 80);
		});
	}

	public function down()
	{
		Schema::drop('clientes');
	}
}