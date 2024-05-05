<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SwimmerParent;

class SwimmerParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the number of SwimmerParent relationships you want to create
        $numberOfRelationships = 4;

        // Use the SwimmerParentFactory to create relationships
        SwimmerParent::factory()->count($numberOfRelationships)->create();
    }
}
