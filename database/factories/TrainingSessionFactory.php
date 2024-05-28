<?php

namespace Database\Factories;

use App\Models\TrainingSession;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingSessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TrainingSession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // find user that is idea a coach or the admin
        $creatorId = User::inRandomOrder()->whereIn('role_id', [1, 2])->first()->id;

        return [
            'session_name' => $this->faker->sentence,
            'created_by' => $creatorId,
        ];
    }
}