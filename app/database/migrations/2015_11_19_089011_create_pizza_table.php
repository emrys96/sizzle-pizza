<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pizzas', function(Blueprint $table)
		{
			$table->increments('pizza_id');
			$table->string('pizza_name')->nullable();
			$table->integer('quantity')->nullable();
			$table->float('amount')->nullable();
			$table->enum('size',array('solo','large'))->nullable();
			$table->float('total')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pizzas', function(Blueprint $table)
		{
			//
		});
	}

}
