<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(ServiceDepartmentSeeder::class);
        // $this->call(ServiceSeeder::class);
        // $this->call(DoctorSeeder::class);
        // $this->call(ContactFormSeeder::class);
        $this->call(BookAppointmentFormSeeder::class);
    }
}
