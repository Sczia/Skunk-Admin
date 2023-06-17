<?php

namespace Database\Seeders;

use App\Models\ServiceSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['service_id' => 1, 'size' => 'Small', 'price' => 130],
            ['service_id' => 1, 'size' => 'Medium','price' => 180],
            ['service_id' => 1, 'size' => 'Large','price' => 200],

            ['service_id' => 2, 'size' => 'Small','price' => 100],
            ['service_id' => 2, 'size' => 'Medium','price' => 120],
            ['service_id' => 2, 'size' => 'Large','price' => 200],

            ['service_id' => 3, 'size' => 'Small','price' => 350],
            ['service_id' => 3, 'size' => 'Medium','price' => 450],
            ['service_id' => 3, 'size' => 'Large','price' => 700],
            ['service_id' => 3, 'size' => 'Extra Large','price' => 950],

            ['service_id' => 4, 'size' => 'Small','price' => 1000],
            ['service_id' => 4, 'size' => 'Medium','price' => 1200],
            ['service_id' => 4, 'size' => 'Large','price' => 1500],
            ['service_id' => 4, 'size' => 'Extra Large','price' => 2000],

            ['service_id' => 5, 'size' => 'Car','price' => 350],
            ['service_id' => 5, 'size' => 'SUV','price' => 500],


            ['service_id' => 6, 'size' => 'Small','price' => 700],
            ['service_id' => 6, 'size' => 'Medium','price' => 850],
            ['service_id' => 6, 'size' => 'Large','price' => 1000],
            ['service_id' => 6, 'size' => 'Extra Large','price' => 1200],

            ['service_id' => 7, 'size' => 'Small','price' => 1000],
            ['service_id' => 7, 'size' => 'Medium','price' => 1200],
            ['service_id' => 7, 'size' => 'Large','price' => 1250],
            ['service_id' => 7, 'size' => 'Large','price' => 1400],
        ];
        foreach ($data as $key => $value) {
            ServiceSize::create($value);
        }
    }
}
