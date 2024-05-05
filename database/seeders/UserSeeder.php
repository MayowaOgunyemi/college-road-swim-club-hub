<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enums\Gender;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the number of squads you want to create
        $numberOfSquads = 10;

        // Use the UserFactory to create squads
        User::factory()->count($numberOfSquads)->create();
    }
}