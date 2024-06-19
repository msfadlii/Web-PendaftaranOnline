<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatan = DB::table('kecamatan')->pluck('id', 'nama');

        $kelurahan = [
            // Asemrowo
            ['kecamatan' => 'Asemrowo', 'nama' => 'Asemrowo'],
            ['kecamatan' => 'Asemrowo', 'nama' => 'Kalianak'],
            ['kecamatan' => 'Asemrowo', 'nama' => 'Tambak Sarioso'],
            // Benowo
            ['kecamatan' => 'Benowo', 'nama' => 'Romokalisari'],
            ['kecamatan' => 'Benowo', 'nama' => 'Tambak Osowilangon'],
            ['kecamatan' => 'Benowo', 'nama' => 'Benowo'],
            ['kecamatan' => 'Benowo', 'nama' => 'Sememi'],
            ['kecamatan' => 'Benowo', 'nama' => 'Pakal'],
            // Bubutan
            ['kecamatan' => 'Bubutan', 'nama' => 'Alun-Alun Contong'],
            ['kecamatan' => 'Bubutan', 'nama' => 'Bubutan'],
            ['kecamatan' => 'Bubutan', 'nama' => 'Gundih'],
            ['kecamatan' => 'Bubutan', 'nama' => 'Jepara'],
            ['kecamatan' => 'Bubutan', 'nama' => 'Tembok Dukuh'],
            // Bulak
            ['kecamatan' => 'Bulak', 'nama' => 'Bulak'],
            ['kecamatan' => 'Bulak', 'nama' => 'Kedung Cowek'],
            ['kecamatan' => 'Bulak', 'nama' => 'Kenjeran'],
            ['kecamatan' => 'Bulak', 'nama' => 'Sukolilo Baru'],
            // Dukuh Pakis
            ['kecamatan' => 'Dukuh Pakis', 'nama' => 'Dukuh Pakis'],
            ['kecamatan' => 'Dukuh Pakis', 'nama' => 'Gunung Sari'],
            ['kecamatan' => 'Dukuh Pakis', 'nama' => 'Pradah Kali Kendal'],
            ['kecamatan' => 'Dukuh Pakis', 'nama' => 'Dukuh Kupang'],
            // Gayungan
            ['kecamatan' => 'Gayungan', 'nama' => 'Gayungan'],
            ['kecamatan' => 'Gayungan', 'nama' => 'Ketintang'],
            // Genteng
            ['kecamatan' => 'Genteng', 'nama' => 'Embong Kaliasin'],
            ['kecamatan' => 'Genteng', 'nama' => 'Genteng'],
            ['kecamatan' => 'Genteng', 'nama' => 'Ketabang'],
            ['kecamatan' => 'Genteng', 'nama' => 'Peneleh'],
            ['kecamatan' => 'Genteng', 'nama' => 'Kapasan'],
            // Gubeng
            ['kecamatan' => 'Gubeng', 'nama' => 'Airlangga'],
            ['kecamatan' => 'Gubeng', 'nama' => 'Barata Jaya'],
            ['kecamatan' => 'Gubeng', 'nama' => 'Gubeng'],
            ['kecamatan' => 'Gubeng', 'nama' => 'Kertajaya'],
            ['kecamatan' => 'Gubeng', 'nama' => 'Mojo'],
            // Gunung Anyar
            ['kecamatan' => 'Gunung Anyar', 'nama' => 'Gunung Anyar'],
            ['kecamatan' => 'Gunung Anyar', 'nama' => 'Gunung Anyar Tambak'],
            ['kecamatan' => 'Gunung Anyar', 'nama' => 'Rungkut Menanggal'],
            ['kecamatan' => 'Gunung Anyar', 'nama' => 'Rungkut Tengah'],
            // Jambangan
            ['kecamatan' => 'Jambangan', 'nama' => 'Jambangan'],
            ['kecamatan' => 'Jambangan', 'nama' => 'Karah'],
            ['kecamatan' => 'Jambangan', 'nama' => 'Kebraon'],
            ['kecamatan' => 'Jambangan', 'nama' => 'Pagesangan'],
            // Karangpilang
            ['kecamatan' => 'Karangpilang', 'nama' => 'Kebraon'],
            ['kecamatan' => 'Karangpilang', 'nama' => 'Waru Gunung'],
            ['kecamatan' => 'Karangpilang', 'nama' => 'Kedurus'],
            ['kecamatan' => 'Karangpilang', 'nama' => 'Karang Pilang'],
            ['kecamatan' => 'Karangpilang', 'nama' => 'Sumur Welut'],
            // Kenjeran
            ['kecamatan' => 'Kenjeran', 'nama' => 'Bulak Banteng'],
            ['kecamatan' => 'Kenjeran', 'nama' => 'Sidotopo Wetan'],
            ['kecamatan' => 'Kenjeran', 'nama' => 'Tambak Wedi'],
            ['kecamatan' => 'Kenjeran', 'nama' => 'Tanah Kali Kedinding'],
            // Krembangan
            ['kecamatan' => 'Krembangan', 'nama' => 'Dupak'],
            ['kecamatan' => 'Krembangan', 'nama' => 'Kemayoran'],
            ['kecamatan' => 'Krembangan', 'nama' => 'Krembangan Selatan'],
            ['kecamatan' => 'Krembangan', 'nama' => 'Morokrembangan'],
            ['kecamatan' => 'Krembangan', 'nama' => 'Perak Timur'],
            // Lakarsantri
            ['kecamatan' => 'Lakarsantri', 'nama' => 'Bangkingan'],
            ['kecamatan' => 'Lakarsantri', 'nama' => 'Jeruk'],
            ['kecamatan' => 'Lakarsantri', 'nama' => 'Lakarsantri'],
            ['kecamatan' => 'Lakarsantri', 'nama' => 'Lidah Kulon'],
            ['kecamatan' => 'Lakarsantri', 'nama' => 'Lidah Wetan'],
            ['kecamatan' => 'Lakarsantri', 'nama' => 'Sumur Welut'],
            // Mulyorejo
            ['kecamatan' => 'Mulyorejo', 'nama' => 'Kalijudan'],
            ['kecamatan' => 'Mulyorejo', 'nama' => 'Kalisari'],
            ['kecamatan' => 'Mulyorejo', 'nama' => 'Kejawan Putih Tambak'],
            ['kecamatan' => 'Mulyorejo', 'nama' => 'Manyar Sabrangan'],
            ['kecamatan' => 'Mulyorejo', 'nama' => 'Menur Pumpungan'],
            ['kecamatan' => 'Mulyorejo', 'nama' => 'Mulyorejo'],
            // Pabean Cantian
            ['kecamatan' => 'Pabean Cantian', 'nama' => 'Bongkaran'],
            ['kecamatan' => 'Pabean Cantian', 'nama' => 'Krembangan Utara'],
            ['kecamatan' => 'Pabean Cantian', 'nama' => 'Nyamplungan'],
            ['kecamatan' => 'Pabean Cantian', 'nama' => 'Perak Barat'],
            ['kecamatan' => 'Pabean Cantian', 'nama' => 'Perak Utara'],
            // Pakal
            ['kecamatan' => 'Pakal', 'nama' => 'Benowo'],
            ['kecamatan' => 'Pakal', 'nama' => 'Bringin'],
            ['kecamatan' => 'Pakal', 'nama' => 'Sumberejo'],
            ['kecamatan' => 'Pakal', 'nama' => 'Babat Jerawat'],
            ['kecamatan' => 'Pakal', 'nama' => 'Pakal'],
            // Rungkut
            ['kecamatan' => 'Rungkut', 'nama' => 'Kalirungkut'],
            ['kecamatan' => 'Rungkut', 'nama' => 'Kedung Baruk'],
            ['kecamatan' => 'Rungkut', 'nama' => 'Medokan Ayu'],
            ['kecamatan' => 'Rungkut', 'nama' => 'Penjaringansari'],
            ['kecamatan' => 'Rungkut', 'nama' => 'Wonorejo'],
            // Sambikerep
            ['kecamatan' => 'Sambikerep', 'nama' => 'Made'],
            ['kecamatan' => 'Sambikerep', 'nama' => 'Lontar'],
            ['kecamatan' => 'Sambikerep', 'nama' => 'Sambikerep'],
            ['kecamatan' => 'Sambikerep', 'nama' => 'Bringin'],
            // Sawahan
            ['kecamatan' => 'Sawahan', 'nama' => 'Sawahan'],
            ['kecamatan' => 'Sawahan', 'nama' => 'Kepuhkembang'],
            ['kecamatan' => 'Sawahan', 'nama' => 'Kupang Krajan'],
            ['kecamatan' => 'Sawahan', 'nama' => 'Patemon'],
            ['kecamatan' => 'Sawahan', 'nama' => 'Petemon'],
            ['kecamatan' => 'Sawahan', 'nama' => 'Dukuh Kupang'],
            ['kecamatan' => 'Sawahan', 'nama' => 'Setro Baru'],
            // Semampir
            ['kecamatan' => 'Semampir', 'nama' => 'Sidotopo'],
            ['kecamatan' => 'Semampir', 'nama' => 'Ujung'],
            ['kecamatan' => 'Semampir', 'nama' => 'Wonokusumo'],
            ['kecamatan' => 'Semampir', 'nama' => 'Pegirian'],
            ['kecamatan' => 'Semampir', 'nama' => 'Ampel'],
            // Simokerto
            ['kecamatan' => 'Simokerto', 'nama' => 'Sidodadi'],
            ['kecamatan' => 'Simokerto', 'nama' => 'Simokerto'],
            ['kecamatan' => 'Simokerto', 'nama' => 'Simolawang'],
            ['kecamatan' => 'Simokerto', 'nama' => 'Tambak Rejo'],
            ['kecamatan' => 'Simokerto', 'nama' => 'Kapasan'],
            // Sukolilo
            ['kecamatan' => 'Sukolilo', 'nama' => 'Gebang Putih'],
            ['kecamatan' => 'Sukolilo', 'nama' => 'Keputih'],
            ['kecamatan' => 'Sukolilo', 'nama' => 'Klampis Ngasem'],
            ['kecamatan' => 'Sukolilo', 'nama' => 'Medokan Semampir'],
            ['kecamatan' => 'Sukolilo', 'nama' => 'Menur Pumpungan'],
            ['kecamatan' => 'Sukolilo', 'nama' => 'Nginden Jangkungan'],
            ['kecamatan' => 'Sukolilo', 'nama' => 'Semolowaru'],
            ['kecamatan' => 'Sukolilo', 'nama' => 'Tegalsari'],
            // Sukomanunggal
            ['kecamatan' => 'Sukomanunggal', 'nama' => 'Putat Jaya'],
            ['kecamatan' => 'Sukomanunggal', 'nama' => 'Simomulyo'],
            ['kecamatan' => 'Sukomanunggal', 'nama' => 'Simomulyo Baru'],
            ['kecamatan' => 'Sukomanunggal', 'nama' => 'Sukomanunggal'],
            ['kecamatan' => 'Sukomanunggal', 'nama' => 'Tanjungsari'],
            ['kecamatan' => 'Sukomanunggal', 'nama' => 'Sonokwijenan'],
            // Tambaksari
            ['kecamatan' => 'Tambaksari', 'nama' => 'Pacar Kembang'],
            ['kecamatan' => 'Tambaksari', 'nama' => 'Pacar Keling'],
            ['kecamatan' => 'Tambaksari', 'nama' => 'Ploso'],
            ['kecamatan' => 'Tambaksari', 'nama' => 'Rangkah'],
            ['kecamatan' => 'Tambaksari', 'nama' => 'Sidotopo Wetan'],
            ['kecamatan' => 'Tambaksari', 'nama' => 'Tambaksari'],
            ['kecamatan' => 'Tambaksari', 'nama' => 'Gading'],
            ['kecamatan' => 'Tambaksari', 'nama' => 'Kapasari'],
            // Tandes
            ['kecamatan' => 'Tandes', 'nama' => 'Manukan Kulon'],
            ['kecamatan' => 'Tandes', 'nama' => 'Manukan Wetan'],
            ['kecamatan' => 'Tandes', 'nama' => 'Tandes'],
            ['kecamatan' => 'Tandes', 'nama' => 'Karang Poh'],
            ['kecamatan' => 'Tandes', 'nama' => 'Balongsari'],
            ['kecamatan' => 'Tandes', 'nama' => 'Banjar Sugihan'],
            // Tegalsari
            ['kecamatan' => 'Tegalsari', 'nama' => 'Tegalsari'],
            ['kecamatan' => 'Tegalsari', 'nama' => 'Dr. Soetomo'],
            ['kecamatan' => 'Tegalsari', 'nama' => 'Keputran'],
            ['kecamatan' => 'Tegalsari', 'nama' => 'Kedungdoro'],
            ['kecamatan' => 'Tegalsari', 'nama' => 'Wonorejo'],
            // Tenggilis Mejoyo
            ['kecamatan' => 'Tenggilis Mejoyo', 'nama' => 'Kendangsari'],
            ['kecamatan' => 'Tenggilis Mejoyo', 'nama' => 'Kutisari'],
            ['kecamatan' => 'Tenggilis Mejoyo', 'nama' => 'Panjang Jiwo'],
            ['kecamatan' => 'Tenggilis Mejoyo', 'nama' => 'Tenggilis Mejoyo'],
            // Wiyung
            ['kecamatan' => 'Wiyung', 'nama' => 'Wiyung'],
            ['kecamatan' => 'Wiyung', 'nama' => 'Jajar Tunggal'],
            ['kecamatan' => 'Wiyung', 'nama' => 'Balasklumprik'],
            ['kecamatan' => 'Wiyung', 'nama' => 'Babatan'],
            ['kecamatan' => 'Wiyung', 'nama' => 'Karang Pilang'],
            ['kecamatan' => 'Wiyung', 'nama' => 'Kebraon'],
            // Wonocolo
            ['kecamatan' => 'Wonocolo', 'nama' => 'Jemur Wonosari'],
            ['kecamatan' => 'Wonocolo', 'nama' => 'Margorejo'],
            ['kecamatan' => 'Wonocolo', 'nama' => 'Sidosermo'],
            ['kecamatan' => 'Wonocolo', 'nama' => 'Siwalankerto'],
            ['kecamatan' => 'Wonocolo', 'nama' => 'Tenggilis Mejoyo'],
            // Wonokromo
            ['kecamatan' => 'Wonokromo', 'nama' => 'Jagir'],
            ['kecamatan' => 'Wonokromo', 'nama' => 'Ngagel'],
            ['kecamatan' => 'Wonokromo', 'nama' => 'Ngagelrejo'],
            ['kecamatan' => 'Wonokromo', 'nama' => 'Sawunggaling'],
            ['kecamatan' => 'Wonokromo', 'nama' => 'Darmo'],
            ['kecamatan' => 'Wonokromo', 'nama' => 'Wonokromo'],
            ['kecamatan' => 'Wonokromo', 'nama' => 'Jemur Wonosari'],
        ];

        foreach ($kelurahan as $kel) {
            DB::table('kelurahan')->insert([
                'kecamatan_id' => $kecamatan[$kel['kecamatan']],
                'nama' => $kel['nama'],
            ]);
        }
    }
}
