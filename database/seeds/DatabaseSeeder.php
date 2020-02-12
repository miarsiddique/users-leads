<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Lead;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(User::class, 50)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
