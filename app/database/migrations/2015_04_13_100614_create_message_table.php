<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message',function($message) { 
		$message->increments('id');
		$message->string('person1');
		$message->string('person2');
		$message->string('description');
		$message->integer('id_project');
		$message->timestamps();		
	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('message');
	}

}
