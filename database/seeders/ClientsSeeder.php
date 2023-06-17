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
                'name' => 'Roy Joseph',
                'email' => 'royjosephlatayan16@gmail.com',
                'company' => 'skunkworks custom',
                'address' => '158 silangan St. Brgy. Dayap, Calauan, Laguna',
                'number' => '09361681322',
                'type' => 'old client'
            ]
        ];
        foreach ($data as $client) {
            Clients::create($client);
        }
    }
}
