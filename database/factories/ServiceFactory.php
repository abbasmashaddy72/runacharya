<?php

namespace Database\Factories;

use App\Models\ServiceDepartment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'service_department_id' => ServiceDepartment::pluck('id')[$this->faker->numberBetween(1, ServiceDepartment::count() - 1)],
            'name' => fake()->name(),
            'icon' => fake()->text(),
            'description' => fake()->realText()
        ];
    }
}
