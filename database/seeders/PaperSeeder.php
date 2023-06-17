<?php

namespace Database\Seeders;

use App\Models\Paper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                ['name' => 'Liquid soap'],
                ['price' => 100],

            ]
        ];
        foreach ($data as $papers) {
            Paper::create($papers);
        }
    }
}
