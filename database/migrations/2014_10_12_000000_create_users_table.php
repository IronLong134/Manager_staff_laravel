<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->integer('id')->autoIncrement();
			$table->string('nick_name');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('full_name');
			$table->dateTime('birthday');
			$table->integer('gender');
			$table->string('phone_number');
			$table->string('adress');
			$table->boolean('graduated');
			$table->dateTime('start_date');
			$table->string('images')->nullable();
			$table->float('salary');
			$table->string('province');
			$table->integer('university_id')->nullable();
			$table->integer('role_id');
			$table->integer('project_id')->nullable();
			$table->softDeletes();
			$table->timestamp('email_verified_at')->nullable();
			$table->rememberToken();
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
