<?php

use Illuminate\Database\Seeder;
use App\Models\Lead;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Lead::truncate();

    	foreach (range(1, 100) as $index) {
        	factory(Lead::class, 1000)->create();
        	printf("\n 1000 data seed");
    	}
    }
}