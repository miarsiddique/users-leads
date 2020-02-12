<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

		foreach ($users as $key => $value) {
			User::create($value);       	
		}       
    }
}
