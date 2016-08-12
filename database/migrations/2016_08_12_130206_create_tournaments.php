<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournaments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tournaments', function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->string('name');
			$table->date('from');
			$table->date('to');
			
			$table->integer('seasons_id')->unsigned();
			$table->foreign('seasons_id')->references('id')->on('seasons');

			$table->integer('categories_id')->unsigned();
			$table->foreign('categories_id')->references('id')->on('categories');

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
