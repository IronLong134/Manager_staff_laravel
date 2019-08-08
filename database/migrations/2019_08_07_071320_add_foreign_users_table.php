<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
						Schema::table('users', function (Blueprint $table) {
							//
//							$table->engine = 'InnoDB';
//							$table->foreign('role_id')->references('id')->on('roles');

							$table->foreign('project_id')->references('id')->on('projects');
							$table->foreign('university_id')->references('id')->on('universities');
						});
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
