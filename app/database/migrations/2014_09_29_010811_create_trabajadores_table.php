<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrabajadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trabajadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',100);
			$table->string('rut',25)->unique();
			$table->string('email',100)->unique();
			$table->string('slug',100)->unique();
			$table->string('cargo',100);
			$table->integer('sueldo_base');

			$table->integer('empresa_id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trabajadores');
	}

}
