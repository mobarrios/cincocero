<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->string('dni');
			$table->string('name');
			$table->string('last_name');
			$table->string('mail');
			$table->string('phone');
			$table->string('cel');
			$table->integer('status');
			$table->text('motivo');
			$table->tinyInteger('admin');

			$table->integer('teams_id')->unsigned();
			$table->foreign('teams_id')->references('id')->on('teams');
			
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
