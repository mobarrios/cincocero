<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matches_details', function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->integer('yellow');
			$table->integer('red');
			$table->integer('goals');

			$table->integer('matches_id')->unsigned();
			$table->foreign('matches_id')->references('id')->on('matches');

			$table->integer('players_id')->unsigned();
			$table->foreign('players_id')->references('id')->on('players');

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
