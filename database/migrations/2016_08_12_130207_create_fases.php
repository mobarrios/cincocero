<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFases extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fases', function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->string('name');
			$table->tinyInteger('second_round');
			$table->tinyInteger('play_off');
			$table->tinyInteger('start');
			$table->tinyInteger('i_v');
			$table->tinyInteger('tercer_puesto');

			$table->integer('tournaments_id')->unsigned();
			$table->foreign('tournaments_id')->references('id')->on('tournaments');

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
