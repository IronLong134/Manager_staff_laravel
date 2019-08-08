<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('projects', function (Blueprint $table) {
			$table->integer('id')->autoIncrement();
			$table->integer('manager_id');
			$table->string('project_name');
			$table->dateTime('start_date');
			$table->dateTime('end_date');
			$table->integer('company_id');
			$table->softDeletes();
			$table->string('decription')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('projects');
	}
}
