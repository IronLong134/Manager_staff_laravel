<?php

use Illuminate\Database\Seeder;

class InsertUserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
			  Schema::disableForeignKeyConstraints();
			  factory(App\User::class, 10)->create();
			  Schema::enableForeignKeyConstraints();
    }
}
