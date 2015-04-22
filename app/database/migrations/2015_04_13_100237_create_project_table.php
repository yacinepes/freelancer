<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('project', function(Blueprint $project)
		{
			$project->increments('id');
			$project->string('title');
			$project->string('person');
			$project->string('description');
			$project->integer('budgue');
			$project->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project');
	}

}
