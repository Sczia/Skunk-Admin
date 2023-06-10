<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        [

            'vehicle' => 'honda civic',
            'plate_number' => 'NBC 1234',
            'model' => '2017',
            'client_id' => 1,

        ];
    }
}
