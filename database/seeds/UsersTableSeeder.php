<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();

		$users = [
			[
				'name' => 'Miar Siddique',
		        'email' => 'miar@gmail.com',
		        'email_verified_at' => now(),
		        'password' => Hash::make('password'),
		        'status' => 'ACTIVE',
		        'remember_token' => Str::random(10),
			],
			[
				'name' => 'Test User',
		        'email' => 'test@gmail.com',
		        'email_verified_at' => now(),
		        'password' => Hash::make('password'),
		        'status' => 'ACTIVE',
		        'remember_token' => Str::random(10),
			]
		];

	    User::insert($users);

	    foreach (range(1, 100) as $index) {
			factory(User::class, 1000)->create();
        	printf("\n 1000 users data seed");
    	}
    }
}

