<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTags extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create("tags",function(Blueprint $table){
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->text('description');
			$table->integer('users_id')->unsigned();
			$table->enum('status',['solicitado', 'tomado','en proceso','finalizado']);

		});

		Schema::table('tags',function(Blueprint $table){
			$table->foreign('users_id')->references('id')->on('users');
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
