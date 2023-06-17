<?php

namespace Database\Seeders;

use App\Models\Expense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Dishwashing Liquid',
                'price' => '100',

            ],
            [
                'name' => 'Sponge',
                'price' => '50',

            ],
            [
                'name' => 'Rugs',
                'price' => '30',

            ],
            [
                'name' => 'Bucket',
                'price' => '150',

            ],
            [
                'name' => 'Hose',
                'price' => '200',

            ],
            [
                'name' => 'Vacuum',
                'price' => '1500',

            ],
            [
                'name' => 'Steam Cleaner',
                'price' => '3000',

            ],




        ];
        foreach ($data as $expenses) {
            Expense::create($expenses);
        }
    }
}
