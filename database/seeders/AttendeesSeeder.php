<?php

namespace Database\Seeders;

use App\Models\Attendees;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attendees::factory()->count(10)->create();
    }
}
