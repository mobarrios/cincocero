<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("providers",function(Blueprint $table){

			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->string('name');
			$table->string('razon_social');
			$table->string('cuit');
			$table->string('phone');
			$table->string('mail');
			$table->string('contact_name');
			$table->string('address');

			$table->integer('iva_condition_id')->unsigned();

		});

		Schema::table('providers',function(Blueprint $table){

			$table->foreign('iva_condition_id')->references('id')->on('iva_condition');
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
