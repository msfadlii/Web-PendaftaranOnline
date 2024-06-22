<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendaftaran')->insert([
            [
                'users_nik' => '3570000000000000',
                'pilihan1_sekolah' => 20533568,
                'pilihan2_sekolah' => 20539113,
                'diterima' => 20533568,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'users_nik' => '3576014403910003',
                'pilihan1_sekolah' => 20533568,
                'pilihan2_sekolah' => 20533594,
                'diterima' => 20533594,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
