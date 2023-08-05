<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->unique()->uuid(),
            'sim' => fake()->randomNumber(5, true),
            'ktp' => fake()->randomNumber(5, true),
            'phone' => fake()->e164PhoneNumber(),
            'address' => fake()->address(),
        ];
    }
}
