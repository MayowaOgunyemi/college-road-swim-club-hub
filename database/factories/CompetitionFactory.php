<?php

namespace Database\Factories;

use App\Models\Competition;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class CompetitionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Competition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Find a random user with role_id = 4 (Swimmer)
        $swimmerId = User::inRandomOrder()->where('role_id', 4)->first()->id;

        return [
            'name' => $this->faker->randomElement(['Olympics', 'All African Games', 'University Games']),
            'stroke_id' => rand(1, 4), // Assuming you have 4 strokes (adjust as needed),
            'swimmer_id' => $swimmerId,
            'distance' => $this->faker->numberBetween(50, 200),
            'lane' => $this->faker->numberBetween(1, 8),
            'total_time' => $this->faker->time(),
            'place' => $this->faker->numberBetween(1, 8),
            'points' => $this->faker->numberBetween(2, 6),
        ];
    }
}

