<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'excerpt' => fake()->paragraph(),
            'category' => 'work',
            'body' => fake()->paragraph(),
        ];
    }
}
