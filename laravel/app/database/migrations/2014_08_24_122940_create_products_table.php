<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products',function($table){
			$table->increments('id');
			$table->integer('category_id');
			$table->integer('vendor_id');
			$table->string('short_description',500);
			$table->string('description',10000);
			$table->string('firstname',100);
			$table->string('lastname',100)->nullable();
			$table->string('image',455);
			$table->decimal('price',7,2);
			$table->float('weight')->nullable();
			$table->integer('views');
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
