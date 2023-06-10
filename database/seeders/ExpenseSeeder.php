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
                ['name' => 'Liquid soap'],
                ['description' => 'for SUV'],
                ['price' => 100],

            ]
        ];
        foreach ($data as $expenses) {
            Expense::create($expenses);
        }
    }
}
