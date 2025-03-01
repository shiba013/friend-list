<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BirthplaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Birthplace::class;
    
     public function definition()
    {
        return [
            //'place-name' => '$this'->faker->prefecture()
        ];
    }
}
