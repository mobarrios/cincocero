<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permissions', function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->tinyInteger('list');
			$table->tinyInteger('edit');
			$table->tinyInteger('delete');
			$table->tinyInteger('store');

			$table->integer('profiles_id')->unsigned();
			$table->foreign('profiles_id')->references('id')->on('profiles');

			$table->integer('modules_id')->unsigned();
			$table->foreign('modules_id')->references('id')->on('modules');


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
