<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Montebon',
                'first_name' => 'Mary Rose',
                'middle_name' => 'Telmoro',
                'address' => 'Cabulijan, Tubigon, Bohol',
                'birth_date' => '2001-10-18',
                'phone_number' => '09982096028',
                'email' => 'montebon.maryarosas@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Jack',
                'first_name' => 'Ripper',
                'middle_name' => 'Mercha',
                'address' => ' Clover, Japan',
                'birth_date' => '1967-11-03',
                'phone_number' => '09982096028',
                'email' => 'montebon.maryarosas@gmail.com',
                'initial_deposit' => 10000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
