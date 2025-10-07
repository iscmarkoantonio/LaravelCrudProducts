<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name' => '',
            // 'description' => fake()->text(50),
            // 'price' => fake()->randomFloat(2, 10, 100),
            // 'image_url' => fake()->imageUrl(640, 480, 'products', true, 'png'),
            // 'created_at' => now(),
            // 'updated_at' => now(),

            'name' => fake()->word(),
            'description' => fake()->text(50),
        ];
    }
}
