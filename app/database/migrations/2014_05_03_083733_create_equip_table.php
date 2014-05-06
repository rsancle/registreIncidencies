<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equip', function($table)
    	{
	    	$table->engine = 'InnoDB';

		    $table->increments('id');
		    $table->string('nom', 50);
		    $table->string('lloc', 50);
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
		Schema::drop('equip');
	}


}
