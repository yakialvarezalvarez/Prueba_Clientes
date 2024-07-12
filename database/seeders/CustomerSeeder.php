<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
            ->count(21)
            ->hascommune(5)
            ->create();
        Customer::factory()
            ->count(21)
            ->hascommune(5)
            ->create();
        Customer::factory()
            ->count(21)
            ->hascommune(5)
            ->create();
        Customer::factory()
            ->count(21)
            ->hascommune(5)
            ->create();
    }
}
