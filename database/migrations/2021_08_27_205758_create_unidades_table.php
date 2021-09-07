<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnidadesTable extends Migration {

	public function up()
	{
		Schema::create('unidades', function(Blueprint $table) {
			$table->increments('id_unidade', true);
			$table->string('descricao', 50);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('unidades');
	}
}