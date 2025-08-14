<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id = User::inRandomOrder()->value('id');
        return [
            'user_id' => $id,
            'email' => User::where('id', $id)->value('email'),
            'title' => fake()->text(rand(25, 35)),
            'message' => fake()->text(500)
        ];
    }
}
