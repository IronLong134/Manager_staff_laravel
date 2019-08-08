<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
	return [
			'nick_name'          => $faker->userName,
			'email'             => $faker->unique()->safeEmail,
			'email_verified_at' => now(),
			'password'          => bcrypt('12345678'), // password
			'full_name'         => $faker->name,
			'birthday'          => $faker->dateTime,
			'gender'            => $faker->boolean,
			'phone_number'      => $faker->regexify('[0-9]{20}'),
			'adress'            => $faker->address,
			'graduated'         => $faker->boolean,
			'start_date'        => $faker->dateTime,
			'salary'            => $faker->numberBetween(1, 10),
			'province'          => str::random(10),
			'university_id'     => $faker->numberBetween(1, 10),
			'role_id'           => $faker->numberBetween(1, 10),
			'project_id'        => $faker->numberBetween(1, 12),
			'remember_token'    => Str::random(10),
	];

});
