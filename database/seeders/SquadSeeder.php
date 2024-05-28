<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Squad;

class SquadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the number of squads you want to create
        $numberOfSquads = 6;

        // Use the SquadFactory to create squads
        Squad::factory()->count($numberOfSquads)->create();
    }
}