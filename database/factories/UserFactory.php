<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Gender;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Change 'password' to a secure default password
            'role_id' => rand(1, 4), // Assuming you have 4 roles (adjust as needed)
            'user_status_id' => rand(1, 3), // Assuming you have 3 user statuses (adjust as needed)
            'gender' => $this->faker->randomElement([Gender::MALE, Gender::FEMALE]),
            'dob' => $this->faker->date(),
            'pic' => null // You can define a default profile picture path here if needed

        ];
    }
}
