<?php

namespace Database\Seeders;

use App\Models\Clients;
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
                'name' => 'Krysia Lee',
                'email' => 'krysialee023@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 1,
            ],
            [

                'name' => Clients::find(1)->name,
                'email' => Clients::find(1)->email,
                'password' => Hash::make('password'),
                'role_id' => 2,
                'client_id' => 1,
            ]
        ];
        foreach ($data as $item) {
            \App\Models\User::create($item);
        }
    }
}
