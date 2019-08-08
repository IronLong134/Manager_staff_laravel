<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        //
				'manager_id'          => $faker->numberBetween(1,5),
				'project_name'=>$faker->name,
				'start_date'=>$faker->date(),
				'end_date'=>$faker->date(),
				'company_id'=>$faker->numberBetween(1,5),
				'decription'=>$faker->address,
    ];
});
