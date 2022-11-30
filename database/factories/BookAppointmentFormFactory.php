<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookAppointmentForm>
 */
class BookAppointmentFormFactory extends Factory
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
            'phone_no' => fake()->phoneNumber(),
            'area' => fake()->city(),
            'appointment_date' => fake()->date('Y-m-d'),
            'appointment_time' => fake()->time(),
            'comment' => fake()->realText(),
        ];
    }
}
