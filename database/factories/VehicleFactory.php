<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'license_number' => 'B '.fake()->randomNumber(4, true).' UDF',
            'slug' => fake()->unique()->uuid(),
            'name' => 'Volvo',
            'series' => 'FH16',
            'type' => 'Tanker',
            'tonnage' => 18000,
            'machine_number' => fake()->ean13(),
            'chasis_number' => fake()->ean13(),
            'driver_id' => null,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
