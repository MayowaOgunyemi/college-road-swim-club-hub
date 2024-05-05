<?php

namespace Database\Factories;

use App\Models\TrainingData;
use App\Models\TrainingSession;
use App\Models\User;
use App\Models\Stroke;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TrainingData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Find a random user with role_id = 2 (Coach)
        $coachId = User::inRandomOrder()->where('role_id', 2)->first()->id;
        
        // Find a random user with role_id = 4 (Swimmer)
        $swimmerId = User::inRandomOrder()->where('role_id', 4)->first()->id;

        return [
            // Retrieve a random training session ID from existing sessions
            'trainingsession_id' => function () {
                return TrainingSession::inRandomOrder()->first()->id;
            },
            'coach_id' => $coachId,
            'swimmer_id' => $swimmerId,
            'distance' => $this->faker->randomFloat(2, 50, 500),
            'duration' => $this->faker->time(),
            'sets' => $this->faker->randomNumber(1),
            'reps' => $this->faker->randomNumber(2),
            'stroke_id' => rand(1, 4), // Assuming you have 4 strokes (adjust as needed),,
        ];
    }
}

