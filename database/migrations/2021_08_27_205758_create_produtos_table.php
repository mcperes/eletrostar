<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutosTable extends Migration {

	public function up()
	{
		Schema::create('produtos', function(Blueprint $table) {
			$table->increments('id_produto');
			$table->string('referencia', 10);
			$table->string('descricao', 50)->nullable();
			$table->timestamps();
			$table->float('valor')->default('0');
			$table->integer('id_unidade')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('produtos');
	}
}