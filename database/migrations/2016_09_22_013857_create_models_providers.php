<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsProviders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create("models_providers",function(Blueprint $table){

            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('providers_id')->unsigned();
            $table->integer('models_id');

            $table->foreign('providers_id')->references('id')->on('providers');
            $table->foreign('models_id')->references('id')->on('models');
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
