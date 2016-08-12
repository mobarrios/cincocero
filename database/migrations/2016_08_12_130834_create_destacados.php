<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestacados extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('destacados', function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->string('name');

			$table->integer('teams_id')->unsigned();
			$table->foreign('teams_id')->references('id')->on('teams');

			$table->integer('players_id')->unsigned();
			$table->foreign('players_id')->references('id')->on('players');

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
