<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products',function($table){
			$table->increments('id');
			$table->bigInteger('category_id');
			$table->bigInteger('vendor_id');
			$table->string('short_description',500);
			$table->string('description',10000);
			$table->string('firstname',100);
			$table->string('lastname',100)->nullable();
			$table->binary('image');
			$table->bigInteger('price');
			$table->float('weight');
			$table->bigInteger('views');
			$table->dateTime('created');
			$table->timestamp('modified');
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
