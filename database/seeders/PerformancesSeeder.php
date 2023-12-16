<?php

namespace Database\Seeders;

use App\Models\Performances;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerformancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Performances::factory()->count(10)->create();
    }
}
