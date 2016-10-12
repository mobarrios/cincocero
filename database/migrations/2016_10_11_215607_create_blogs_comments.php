<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsComments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("blogs_comments",function(Blueprint $table){
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->text('description');
			$table->integer('blogs_id')->unsigned();
			$table->tinyInteger('visible')->default(0);

		});
		Schema::table('blogs_comments',function(Blueprint $table){

			$table->foreign('blogs_id')->references('id')->on('blogs');

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
