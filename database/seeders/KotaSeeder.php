<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = DB::table('provinsi')->where('nama', 'Jawa Timur')->first()->id;

        DB::table('kota')->insert([
            ['provinsi_id' => $provinsiId, 'nama' => 'Batu'],
            ['provinsi_id' => $provinsiId, 'nama' => 'Blitar'],
            ['provinsi_id' => $provinsiId, 'nama' => 'Kediri'],
            ['provinsi_id' => $provinsiId, 'nama' => 'Madiun'],
            ['provinsi_id' => $provinsiId, 'nama' => 'Malang'],
            ['provinsi_id' => $provinsiId, 'nama' => 'Mojokerto'],
            ['provinsi_id' => $provinsiId, 'nama' => 'Pasuruan'],
            ['provinsi_id' => $provinsiId, 'nama' => 'Probolinggo'],
            ['provinsi_id' => $provinsiId, 'nama' => 'Surabaya'],
        ]);
    }
}
