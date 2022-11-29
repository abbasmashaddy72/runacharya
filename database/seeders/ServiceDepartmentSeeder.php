<?php

namespace Database\Seeders;

use App\Models\ServiceDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceDepartment::factory()->count(rand(1, 5))->create();
    }
}
