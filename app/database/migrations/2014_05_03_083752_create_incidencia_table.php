<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incidencia', function($table)
    	{
	    	$table->increments('id');

		    $table->string('descripcio', 500);
		    $table->boolean('arreglada', 20);
		    $table->string('comentari', 500);
		    $table->integer('id_equip')->unsigned()->nullable();
	        $table->foreign('id_equip')->references('id')->on('equip');
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
		Schema::drop('incidencia');
	}


}
