<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_users')->insert([
            [
                'users_nik' => '3570000000000000',
                'nama' => 'Budi Boy', 
                'jk_id' => 1,
                'tempatLahir' => 'Surabaya',
                'tglLahir' => '2024-05-20',
                'alamat' => 'Jl. Surabaya Selatan No 12',
                'rt' => 1,
                'rw' => 2,
                'provinsi_id' => 11,
                'kota_id' => 9,
                'kecamatan_id' => 12,
                'kelurahan_id' => 47,
                'kodepos_id' => 57,
                'ortu' => 'Agus Putra',
                'no_hp' => '08123183749',
                'status_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'users_nik' => '3576014403910003',
                'nama' => 'Ani Rini', 
                'jk_id' => 2,
                'tempatLahir' => 'Sidoarjo',
                'tglLahir' => '2024-02-01',
                'alamat' => 'Jl. Surabaya Barat No 59',
                'rt' => 3,
                'rw' => 4,
                'provinsi_id' => 11,
                'kota_id' => 9,
                'kecamatan_id' => 10,
                'kelurahan_id' => 40,
                'kodepos_id' => 50,
                'ortu' => 'Bambang Aji',
                'no_hp' => '08110987233',
                'status_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
