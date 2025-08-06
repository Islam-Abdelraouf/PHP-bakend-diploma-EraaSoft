<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'title'=> fake()->text(25),
            'price'=> fake()->numberBetween(500,1000),
            'description'=> fake()->text(200),
            'code'=> fake()->unique()->uuid(),
            'image'=>  url( 'images/product.jpg')
        ];
    }
}
