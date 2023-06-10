<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [

                'email' => 'krysialee023@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 1,
            ],
            [

                'email' => 'royjosephlatayan16@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 2,
            ]
        ];
        foreach ($data as $item) {
            \App\Models\User::create($item);
        }
    }
}
