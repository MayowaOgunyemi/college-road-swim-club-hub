<?php

namespace Database\Factories;

use App\Models\SwimmerParent;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SwimmerParentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SwimmerParent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         // Find a random user with role_id = 2 (Parent)
         $parentId = User::inRandomOrder()->where('role_id', 3)->first()->id;
        
         // Find a random user with role_id = 4 (Swimmer)
         $swimmerId = User::inRandomOrder()->where('role_id', 4)->first()->id;
     
         return [
             'swimmer_id' => $swimmerId,
             'parent_id' => $parentId
         ];
    }
}
