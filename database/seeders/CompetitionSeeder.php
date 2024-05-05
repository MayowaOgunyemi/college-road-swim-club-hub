<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Competition;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the number of competitions you want to create
        $numberOfCompetitions = 6;

        // Use the CompetitionFactory to create competitions
        Competition::factory()->count($numberOfCompetitions)->create();
    }
}
