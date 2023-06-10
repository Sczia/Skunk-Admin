<?php

namespace Database\Seeders;

use App\Models\Clients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
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
                'password' => 'krysialee023',
                'company' => 'skunkworks custom',
                'address' => '158 silangan St. Brgy. Dayap, Calauan, Laguna',
                'number' => '09361681322'


            ]
        ];
        foreach ($data as $client) {
            Clients::create($client);
        }
    }
}
