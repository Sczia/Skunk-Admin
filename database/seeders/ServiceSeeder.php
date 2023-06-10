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
            [
                ['service' => 'Carwash','price'=>130],
                ['service' => 'Motorcycle','price'=>100],
                ['service' => 'Wash and Wax','price'=>350],
                ['service' => 'Acid rain removal','price'=>1000],
                ['service' => 'Engine wash','price'=>350],
                ['service' => 'Carwash with machine wax','price'=>700],
                ['service' => 'Waterless engine detailing','price'=>1000],
            ]
        ];
        foreach ($data as $services) {
            Service::create($services);
        }
    }
}
