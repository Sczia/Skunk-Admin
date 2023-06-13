<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['service' => 'Carwash'],
            ['service' => 'Motorcycle', ],
            ['service' => 'Wash and Wax',],
            ['service' => 'Acid rain removal',],
            ['service' => 'Engine wash',],
            ['service' => 'Carwash with machine wax',],
            ['service' => 'Waterless engine detailing',],
        ];
        foreach ($data as $services) {
            Service::create($services);
        }
    }
}
