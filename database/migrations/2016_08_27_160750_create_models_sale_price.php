<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateModelsSalePrice extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("models_sale_price",function(Blueprint $table){
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->double('price',10.2);
			$table->double('patentamiento_price',10.2);
			$table->double('pack_price',10.2);
			$table->double('formulario_price',10.2);

			$table->integer('models_id');
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
