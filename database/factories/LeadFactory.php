<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use App\Models\Lead;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Lead Model Factories
|--------------------------------------------------------------------------
*/

$factory->define(Lead::class, function (Faker $faker) {
    return [
		'user_id' => function() {
			return User::all()->random();
		},
		'query' => $faker->text($maxNbChars = 100),
		'type' => $faker->randomElement(config('leads.lead_type')),
        'status' => $faker->randomElement(config('leads.status')),
    ];
});
