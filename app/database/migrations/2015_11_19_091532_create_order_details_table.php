<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_details', function(Blueprint $table)
		{
			$table->integer('order_id')->unassigned();
			$table->foreign('order_id')->references('order_id')->on('orders');
			$table->integer('pizza_id')->unassigned();
			$table->foreign('pizza_id')->references('pizza_id')->on('pizzas');
			$table->softDeletes();
			// $table->integer('quantity');
			// $table->float('amount');
			// $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orders_details', function(Blueprint $table)
		{
			//
		});
	}

}
