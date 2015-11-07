<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Movie::class, function($faker) {
	// FIND OUT HOW TO USE FAKER TO USE MY OWN ARRAYS 
	// $movieRating = array('G', 'PG', 'PG-13', 'R');
	// $movieCategories = array('Drama', 'Action', 'Comedy', 'Suspense', 'Horror', 'Western', 'Romance');
	return [
		'title' => $faker->sentence(mt_rand(3,7)),
		'synopsis' => $faker->sentence(mt_rand(3,7)),
		'image' => $faker->unique()->imageUrl($width = 640, $height = 480),
		'release_date' => $faker->dateTimeBetween('-12 month', '+3 days'),
		'director' => $faker->sentence(mt_rand(1, 2)),
		'writer_1' => $faker->sentence(mt_rand(1, 2)),
		'writer_2' => $faker->sentence(mt_rand(1, 2)),
		'actor_1' => $faker->sentence(mt_rand(1, 2)),
		'actor_2' => $faker->sentence(mt_rand(1, 2)),
		'actor_3' => $faker->sentence(mt_rand(1, 2)),
		'rating' => $faker->word,
		'categories' => $faker->word,
	];
});
