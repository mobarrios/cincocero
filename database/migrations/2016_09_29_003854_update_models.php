<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateModels extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table("models",function(Blueprint $table){

            $table->integer('types_id')->nullable()->unsigned();
            $table->foreign('types_id')->references('id')->on('types');

            $table->integer('engines_id')->nullable()->unsigned();
            $table->foreign('engines_id')->references('id')->on('engines');

            $table->integer('displacements_id')->nullable()->unsigned();
            $table->foreign('displacements_id')->references('id')->on('displacements');

            $table->enum('transmission', ['manual', 'automática'])->nullable;
            $table->string('hp');
            $table->enum('start',['manual', 'automática'])->nullable;
            $table->enum('brake',['disco', 'tambor'])->nullable;
            $table->string('tanque_de_combustible');
            $table->string('peso');
            $table->text('adicional');

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
