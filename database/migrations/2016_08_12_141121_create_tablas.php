<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tablas', function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();


			$table->integer('pts');
			$table->integer('pj');
			$table->integer('pg');
			$table->integer('pe');
			$table->integer('gf');
			$table->integer('gc');
			$table->integer('dg');

			$table->integer('teams_id')->unsigned();
			$table->foreign('teams_id')->references('id')->on('teams');

			$table->integer('fases_id')->unsigned();
			$table->foreign('fases_id')->references('id')->on('fases');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
