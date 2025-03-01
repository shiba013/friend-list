<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Friend;

class FriendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Friend::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name
        ];
    }
}