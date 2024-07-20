<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement([1,2,3]),
            'title' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'content' => fake()->paragraph(3, true),
            'image' => fake()->imageUrl(),
            'view' => fake()->numberBetween(100,500)
        ];
    }
}
