<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancings extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("financings",function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->integer('quota_from');
			$table->integer('quota_to');
			$table->integer('quota');
			$table->double('coef',10.10);
			$table->integer('type');

			$table->integer('financials_id')->unsigned();
		});

		Schema::table('financings',function(Blueprint $table){

			$table->foreign('financials_id')->references('id')->on('financials');
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
