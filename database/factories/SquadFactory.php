<?php

namespace Database\Factories;

use App\Models\Squad;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SquadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Squad::class;
        
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
             'name' => $this->faker->randomElement(['Senior Team', 'Junior Team']),
             'coach_id' => $coachId,
             'swimmer_id' => $swimmerId,
         ];
     }
}

