<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => fake() -> regexify('[A-Z0-9]{5}'),
            'name' => fake() -> words(rand(1, 3), true),
            'description' => fake()->boolean() ? fake()->text() : null,
            'price' => fake() -> randomFloat(2, 1, 100),
            'weight' => fake() -> randomFloat(1, 0.5, 100),
        ];
    }
}
