<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzaDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pizza_details', function(Blueprint $table)
		{
			$table->integer('pizza_id')->unassigned();
			$table->foreign('pizza_id')->references('pizza_id')->on('pizzas');
			$table->integer('ingredients_id')->unassigned();
			$table->foreign('ingredients_id')->references('ingredients_id')->on('ingredients');
			$table->enum('role',array('base','cheese','meat','chili','topping'));
			//$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pizza_details', function(Blueprint $table)
		{
			//
		});
	}

}
