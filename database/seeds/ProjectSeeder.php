<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
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
			factory(App\Project::class, 5)->create();
			Schema::enableForeignKeyConstraints();
    }
}
