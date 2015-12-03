<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('order_id');
			$table->integer('user_id')->unassigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('toAddress')->nullable();
			$table->double('longitude',5,14)->nullable();
			$table->double('latitude',5,14)->nullable();
			$table->float('amount')->nullable();
			$table->enum('mode',array('delivery','pick-up'))->nullable();
			$table->enum('status',array('confirmed','unconfirmed','on process','on delivery','ready for pick-up', 'received'));
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
		Schema::table('orders', function(Blueprint $table)
		{
			//
		});
	}

}
