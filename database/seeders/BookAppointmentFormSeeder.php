<?php

namespace Database\Seeders;

use App\Models\BookAppointmentForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookAppointmentFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookAppointmentForm::factory()->count(rand(10, 50))->create();
    }
}
