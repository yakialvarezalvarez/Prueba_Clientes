<?php

namespace Database\Seeders;

use App\Models\Commune;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Commune::factory()
            ->count(21)
            ->hasRegion(5)
            ->create();
        Commune::factory()
            ->count(19)
            ->hasRegion(3)
            ->create();
        Commune::factory()
            ->count(17)
            ->hasRegion(2)
            ->create();
        Commune::factory()
            ->count(14)
            ->hasRegion(1)
            ->create();
    }
}
