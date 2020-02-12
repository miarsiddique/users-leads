<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| User Model Factories
|--------------------------------------------------------------------------
*/

$factory->define(User::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make('password'),
        'status' => $faker->randomElement(config('leads.status')),
        'remember_token' => Str::random(10),
    ];
});
