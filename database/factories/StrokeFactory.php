<?php

namespace Database\Factories;

use App\Models\Stroke;
use Illuminate\Database\Eloquent\Factories\Factory;

class StrokeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stroke::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['Freestyle', 'Backstroke', 'Breaststroke', 'Butterfly']) // Generate a fake word for the stroke type
        ];
    }
}

