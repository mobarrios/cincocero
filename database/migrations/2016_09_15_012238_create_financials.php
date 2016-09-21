<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancials extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("financials",function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->string('name');
			$table->double('extra_cost',10.2);
			

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
