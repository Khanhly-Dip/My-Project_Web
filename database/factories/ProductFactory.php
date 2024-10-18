<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

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
    public function definition(): array
    {
        return [
            'Pro_Name'=>fake()->name(),
            'Pro_Price' => fake()->randomFloat(2, 100000, 100000000),
            'Pro_Kind' => fake()->numberBetween(1, 4),
            'Pro_Size'=>fake()->randomElement(['S', 'M', 'L', 'XL']),
            'Pro_Quantity'=>fake()->numberBetween(10,200),
        ];
    }
}
