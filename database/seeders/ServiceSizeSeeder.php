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
            ['service_id' => 1, 'size' => 'Medium','price' => 130],
            ['service_id' => 1, 'size' => 'Large','price' => 130],

            ['service_id' => 2, 'size' => 'Small','price' => 130],
            ['service_id' => 2, 'size' => 'Medium','price' => 130],
            ['service_id' => 2, 'size' => 'Large','price' => 130],

            ['service_id' => 3, 'size' => 'Small','price' => 130],
            ['service_id' => 3, 'size' => 'Medium','price' => 130],
            ['service_id' => 3, 'size' => 'Large','price' => 130],

            ['service_id' => 4, 'size' => 'Small','price' => 130],
            ['service_id' => 4, 'size' => 'Medium','price' => 130],
            ['service_id' => 4, 'size' => 'Large','price' => 130],

            ['service_id' => 5, 'size' => 'Small','price' => 130],
            ['service_id' => 5, 'size' => 'Medium','price' => 130],
            ['service_id' => 5, 'size' => 'Large','price' => 130],

            ['service_id' => 6, 'size' => 'Small','price' => 130],
            ['service_id' => 6, 'size' => 'Medium','price' => 130],
            ['service_id' => 6, 'size' => 'Large','price' => 130],

            ['service_id' => 7, 'size' => 'Small','price' => 130],
            ['service_id' => 7, 'size' => 'Medium','price' => 130],
            ['service_id' => 7, 'size' => 'Large','price' => 130],
        ];
        foreach ($data as $key => $value) {
            ServiceSize::create($value);
        }
    }
}
