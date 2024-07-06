<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $userData = [
            [
                'email' => 'Admin@gmail.com',
                'name'=>'admin',
                'role' => 'admin',
                'password' => bcrypt('admin'),
            ],  

            [
                'email' => 'siswa1@gmail.com',
                'name'=>'budi',
                'role' => 'siswa',
                'password' => bcrypt('1'),
            ]
        ];
        
       
        foreach($userData as $key => $val){
            User::create($val);
        }
        $this->call([
            UserSeeder::class,
            ProvinsiSeeder::class,
            KotaSeeder::class,
            KecamatanSeeder::class,
            KelurahanSeeder::class,
            KodePosSeeder::class,
            JenisKelaminSeeder::class,
            StatusSeeder::class,
            SiswaSeeder::class,
        ]);
    }
}
