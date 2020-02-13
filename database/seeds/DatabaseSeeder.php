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
        User::truncate();
        Lead::truncate();
        $this->call(UsersTableSeeder::class);
    	factory(User::class, 10000)->create();
        factory(Lead::class, 10000)->create();
    }
}
