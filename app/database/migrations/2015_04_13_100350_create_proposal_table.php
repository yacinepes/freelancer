<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proposal',function($proposal) { 
		$proposal->increments('id');
		$proposal->string('person');
		$proposal->string('id_project');
		$proposal->integer('budget');
		$proposal->string('description');
		$proposal->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proposal');
	}

}
