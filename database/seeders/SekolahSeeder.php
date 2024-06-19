<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_kelamin')->insert([
            ['jk' => 'Laki-Laki'],
            ['jk' => 'Perempuan'],
        ]);

        DB::table('sekolah')->insert([
            [
                'npsn' => 20533568,
                'nama_sekolah' => 'SD NEGERI KEPUTIH 245', 
                'alamat_sekolah' => 'Jl. Arif Rahman Hakim No.1',
                'provinsi_id' => 11,
                'kota_id' => 9,
                'kecamatan_id' => 23,
                'kelurahan_id' => 105,
                'kodepos_id' => 62,
                'email' => 'sdnkeputih@yahoo.com',
                'no_hp' => '0315926163',
                'pagu' => 60,
                'akreditasi' => 'A',
                'kepsek' => 'Johanes Sujitno'
            ],
            [
                'npsn' => 20533594,
                'nama_sekolah' => 'SD NEGERI KLAMPIS NGASEM I 246', 
                'alamat_sekolah' => 'Jl. Arif Rahman Hakim No.99-c',
                'provinsi_id' => 11,
                'kota_id' => 9,
                'kecamatan_id' => 23,
                'kelurahan_id' => 106,
                'kode_pos' => 67,
                'email' => 'humas_klampis1@yahoo.co.id',
                'no_hp' => '0315925762',
                'pagu' => 120,
                'akreditasi' => 'A',
                'kepsek' => 'Paino'
            ],
            [
                'npsn' => 20539113,
                'nama_sekolah' => 'SD NEGERI MEDOKAN SEMAMPIR I', 
                'alamat_sekolah' => 'Medokan Semampir Gg Keurahan No 124',
                'provinsi_id' => 11,
                'kota_id' => 9,
                'kecamatan_id' => 23,
                'kelurahan_id' => 107,
                'kode_pos' => 67,
                'email' => 'semampirmedokan@gmail.com',
                'no_hp' => '0315997141',
                'pagu' => 60,
                'akreditasi' => 'A',
                'kepsek' => 'Sri Andaenny'
            ],
        ]);
    }
}
