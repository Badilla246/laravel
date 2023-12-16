<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BandsSeeder::class);
        $this->call(VenuesSeeder::class);
        $this->call(PerformancesSeeder::class);
        $this->call(AttendeesSeeder::class);
    }
}
