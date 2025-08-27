<?php

namespace Database\Factories;

use App\Models\Major;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->unique()->safeEmail,
            'phone' => fake()->unique()->phoneNumber(),
            'address' => fake()->address,
            'image' => fake()->imageUrl(640, 480, 'people', true, 'doctor'),
            'major_id' => Major::query()->inRandomOrder()->first()->id,
        ];
    }
}
