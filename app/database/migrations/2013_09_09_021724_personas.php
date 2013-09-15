<?php

use Illuminate\Database\Migrations\Migration;

class Personas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create("personas",function($table){
            $table->increments("id_persona");
            $table->string("nombre");
            $table->string("email",100);
            $table->text("bio");
            $table->timestamps();
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
        Schema::drop("personas");
	}

}