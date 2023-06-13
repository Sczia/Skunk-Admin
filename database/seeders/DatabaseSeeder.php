<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Service;
use App\Models\ServiceSize;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClientsSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CarsSeeder::class,
            ServiceSeeder::class,
            ServiceSizeSeeder::class,
        ]);
    }
}
