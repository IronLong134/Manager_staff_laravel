<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//			Schema::table('users', function (Blueprint $table) {
//				//
//				$table->foreign('role_id')->references('id')->on('roles');
//
//				$table->foreign('project_id')->references('id')->on('projects');
//				$table->foreign('university_id')->references('id')->on('universities');
//			});
			Schema::table('projects', function (Blueprint $table) {
				//
				$table->foreign('manager_id')->references('id')->on('users');
				$table->foreign('company_id')->references('id')->on('companies');
			});
			Schema::table('check_ins', function (Blueprint $table) {
				//
				$table->foreign('user_id')->references('id')->on('users');
			});
			Schema::table('user_skill',function (Blueprint $table){
				$table->foreign('user_id')->references('id')->on('users');
				$table->foreign('skill_id')->references('id')->on('skills');
			});
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
