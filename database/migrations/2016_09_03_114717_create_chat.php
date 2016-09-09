<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChat extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("chats",function(Blueprint $table){
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->string('token');
			$table->integer('users_id');
			$table->integer('status');

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
