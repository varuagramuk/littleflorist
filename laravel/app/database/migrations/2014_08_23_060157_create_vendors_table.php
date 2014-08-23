<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendors',function($table){
			$table->increments('id');
			$table->string('firstname',100);
			$table->string('lastname',100)->nullable();
			$table->string('username',40);
			$table->string('password',40);
			$table->string('address',455);
			$table->string('email',255);
			$table->string('primary_phone',255);
			$table->string('secondary_phone',255)->nullable();
			$table->string('stores_id',255)->nullable();
			$table->string('delivery_options')->nullable();
			$table->enum('status',array('inactive','active'));
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
		Schema::drop('vendors');		
	}

}
