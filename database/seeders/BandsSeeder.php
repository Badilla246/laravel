<?php

namespace Database\Seeders;

use App\Models\Bands;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bands::factory()->count(10)->create();
    }
}
