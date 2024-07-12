<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commune;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'name' => fake()->name(),
            'last_name' => fake()->name(),
            'address' => fake()->address(),
            'status' => 'A',
            'date_reg' => now(),
            'commune_id' => Commune::factory(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
