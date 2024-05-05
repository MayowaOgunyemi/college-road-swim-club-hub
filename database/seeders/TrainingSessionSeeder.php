<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TrainingSession;

class TrainingSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the number of training sessions you want to create
        $numberOfSessions = 5;

        // Use the TrainingSessionFactory to create training sessions
        TrainingSession::factory()->count($numberOfSessions)->create();
    }
}