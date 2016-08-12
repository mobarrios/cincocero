<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatches extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('matches', function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->string('name');
			$table->string('hour');
			$table->date('date');
			$table->string('status');
			$table->integer('home_goals');
			$table->integer('away_goals');

			$table->tinyInteger('walk_over');
			$table->string('walk_over_motivo');
			$table->tinyInteger('walk_over_no_ptos');

			$table->integer('fases_week_id')->unsigned();
			$table->foreign('fases_week_id')->references('id')->on('fases_week');

			$table->integer('home_teams_id')->unsigned();
			$table->foreign('home_teams_id')->references('id')->on('teams');

			$table->integer('away_teams_id')->unsigned();
			$table->foreign('away_teams_id')->references('id')->on('teams');

			$table->integer('canchas_id')->unsigned();
			$table->foreign('canchas_id')->references('id')->on('canchas');
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
