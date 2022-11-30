<?php

namespace Database\Seeders;

use App\Models\ContactForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactForm::factory()->count(rand(10, 50))->create();
    }
}
