<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
        ->count(15)
        ->hasLinks(5)
        ->create();

        User::factory()
        ->count(12)
        ->hasLinks(20)
        ->create();

        User::factory()
        ->count(5)
        ->hasLinks(2)
        ->create();

        User::factory()
        ->count(5)
        ->create();
    }
}
