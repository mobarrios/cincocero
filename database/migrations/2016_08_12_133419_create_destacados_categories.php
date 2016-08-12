<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestacadosCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('destacados_categories', function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->string('name');
			$table->date('from');
			$table->date('to');

			$table->text('observations');

			$table->integer('seasons_id')->unsigned();
			$table->foreign('seasons_id')->references('id')->on('seasons');

			$table->integer('categories_id')->unsigned();
			$table->foreign('categories_id')->references('id')->on('categories');

			$table->integer('teams_id')->unsigned();
			$table->foreign('teams_id')->references('id')->on('teams');

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
