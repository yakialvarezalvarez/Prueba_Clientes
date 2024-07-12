<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::factory()
            ->count(20)
            ->create();
        Region::factory()
            ->count(18)
            ->create();
        Region::factory()
            ->count(10)
            ->create();
        Region::factory()
            ->count(10)
            ->create();
    }
}
