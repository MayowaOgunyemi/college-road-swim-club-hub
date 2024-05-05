<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TrainingData;

class TrainingDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the number of training data entries you want to create
        $numberOfTrainingData = 10;

        // Use the TrainingDataFactory to create training data entries
        TrainingData::factory()->count($numberOfTrainingData)->create();
    }
}