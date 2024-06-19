<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kotaId = DB::table('kota')->where('nama', 'Surabaya')->first()->id;

        DB::table('kecamatan')->insert([
            ['kota_id' => $kotaId, 'nama' => 'Asemrowo'],
            ['kota_id' => $kotaId, 'nama' => 'Benowo'],
            ['kota_id' => $kotaId, 'nama' => 'Bubutan'],
            ['kota_id' => $kotaId, 'nama' => 'Bulak'],
            ['kota_id' => $kotaId, 'nama' => 'Dukuh Pakis'],
            ['kota_id' => $kotaId, 'nama' => 'Gayungan'],
            ['kota_id' => $kotaId, 'nama' => 'Genteng'],
            ['kota_id' => $kotaId, 'nama' => 'Gubeng'],
            ['kota_id' => $kotaId, 'nama' => 'Gunung Anyar'],
            ['kota_id' => $kotaId, 'nama' => 'Jambangan'],
            ['kota_id' => $kotaId, 'nama' => 'Karangpilang'],
            ['kota_id' => $kotaId, 'nama' => 'Kenjeran'],
            ['kota_id' => $kotaId, 'nama' => 'Krembangan'],
            ['kota_id' => $kotaId, 'nama' => 'Lakarsantri'],
            ['kota_id' => $kotaId, 'nama' => 'Mulyorejo'],
            ['kota_id' => $kotaId, 'nama' => 'Pabean Cantian'],
            ['kota_id' => $kotaId, 'nama' => 'Pakal'],
            ['kota_id' => $kotaId, 'nama' => 'Rungkut'],
            ['kota_id' => $kotaId, 'nama' => 'Sambikerep'],
            ['kota_id' => $kotaId, 'nama' => 'Sawahan'],
            ['kota_id' => $kotaId, 'nama' => 'Semampir'],
            ['kota_id' => $kotaId, 'nama' => 'Simokerto'],
            ['kota_id' => $kotaId, 'nama' => 'Sukolilo'],
            ['kota_id' => $kotaId, 'nama' => 'Sukomanunggal'],
            ['kota_id' => $kotaId, 'nama' => 'Tambaksari'],
            ['kota_id' => $kotaId, 'nama' => 'Tandes'],
            ['kota_id' => $kotaId, 'nama' => 'Tegalsari'],
            ['kota_id' => $kotaId, 'nama' => 'Tenggilis Mejoyo'],
            ['kota_id' => $kotaId, 'nama' => 'Wiyung'],
            ['kota_id' => $kotaId, 'nama' => 'Wonocolo'],
            ['kota_id' => $kotaId, 'nama' => 'Wonokromo'],
        ]);
    }
}
