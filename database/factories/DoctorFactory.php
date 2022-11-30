<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'degree' => fake()->companySuffix(),
            'specialty' => fake()->company(),
            'reg_no' => fake()->numberBetween(12, 55),
            'image' => fake()->text(),
        ];
    }
}
