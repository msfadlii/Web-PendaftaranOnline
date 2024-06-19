<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nik' => 'admin',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'nik' => '3576014403910003',
                'password' => bcrypt('123'),
                'role' => 'user'
            ],
            [
                'nik' => '3570000000000000',
                'password' => bcrypt('000'),
                'role' => 'user'
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
