<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Pantalon', 'Tenis', 'Camisa', 'Zapatos', 'Gorra', 'Saco', 'Zapatos de tacon', 'Vestido', 'Pantalones de cuero', 'Pantaloneta']),
            'description' => fake()->text(200),
            'price' => fake()->randomFloat(2, 10, 100),
            'image_url' => fake()->imageUrl(640, 480, 'products', true, 'png'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
