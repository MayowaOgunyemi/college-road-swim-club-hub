<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserStatus;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the user statuses to be created
        $statuses = ['Active', 'Deleted', 'Locked'];

        // Create user statuses using the factory with specified statuses
        foreach ($statuses as $status) {
            UserStatus::factory()->create(['status' => $status]);
        }
    }
}
