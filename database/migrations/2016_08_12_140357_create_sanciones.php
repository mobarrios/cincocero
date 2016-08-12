<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanciones extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sanciones', function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->text('sancion');
			$table->integer('matches_id');
			$table->integer('cantidad_fechas');


			$table->integer('players_id')->unsigned();
			$table->foreign('players_id')->references('id')->on('players');

			$table->integer('end_fases_week_id')->unsigned();
			$table->foreign('end_fases_week_id')->references('id')->on('fases_week');

			$table->integer('fases_week_id')->unsigned();
			$table->foreign('fases_week_id')->references('id')->on('fases_week');


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
