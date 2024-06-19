<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KodePosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelurahan = DB::table('kelurahan')->pluck('id', 'nama');

        $kodepos = [
             // Asemrowo
             ['kelurahan' => 'Asemrowo', 'kode' => '60181'],
             ['kelurahan' => 'Asemrowo', 'kode' => '60182'],
             ['kelurahan' => 'Asemrowo', 'kode' => '60183'],
             ['kelurahan' => 'Kalianak', 'kode' => '60184'],
             ['kelurahan' => 'Tambak Sarioso', 'kode' => '60185'],
             // Benowo
             ['kelurahan' => 'Romokalisari', 'kode' => '60192'],
             ['kelurahan' => 'Tambak Osowilangon', 'kode' => '60191'],
             ['kelurahan' => 'Benowo', 'kode' => '60193'],
             ['kelurahan' => 'Sememi', 'kode' => '60194'],
             ['kelurahan' => 'Pakal', 'kode' => '60195'],
             // Bubutan
             ['kelurahan' => 'Alun-Alun Contong', 'kode' => '60161'],
             ['kelurahan' => 'Bubutan', 'kode' => '60162'],
             ['kelurahan' => 'Gundih', 'kode' => '60163'],
             ['kelurahan' => 'Jepara', 'kode' => '60164'],
             ['kelurahan' => 'Tembok Dukuh', 'kode' => '60165'],
             // Bulak
             ['kelurahan' => 'Bulak', 'kode' => '60171'],
             ['kelurahan' => 'Kedung Cowek', 'kode' => '60172'],
             ['kelurahan' => 'Kenjeran', 'kode' => '60173'],
             ['kelurahan' => 'Sukolilo Baru', 'kode' => '60174'],
             // Dukuh Pakis
             ['kelurahan' => 'Dukuh Pakis', 'kode' => '60225'],
             ['kelurahan' => 'Gunung Sari', 'kode' => '60226'],
             ['kelurahan' => 'Pradah Kali Kendal', 'kode' => '60227'],
             ['kelurahan' => 'Dukuh Kupang', 'kode' => '60228'],
             // Gayungan
             ['kelurahan' => 'Gayungan', 'kode' => '60231'],
             ['kelurahan' => 'Ketintang', 'kode' => '60232'],
             // Genteng
             ['kelurahan' => 'Embong Kaliasin', 'kode' => '60271'],
             ['kelurahan' => 'Genteng', 'kode' => '60272'],
             ['kelurahan' => 'Ketabang', 'kode' => '60273'],
             ['kelurahan' => 'Peneleh', 'kode' => '60274'],
             ['kelurahan' => 'Kapasan', 'kode' => '60275'],
             // Gubeng
             ['kelurahan' => 'Airlangga', 'kode' => '60281'],
             ['kelurahan' => 'Barata Jaya', 'kode' => '60282'],
             ['kelurahan' => 'Gubeng', 'kode' => '60283'],
             ['kelurahan' => 'Kertajaya', 'kode' => '60284'],
             ['kelurahan' => 'Mojo', 'kode' => '60285'],
             // Gunung Anyar
             ['kelurahan' => 'Gunung Anyar', 'kode' => '60291'],
             ['kelurahan' => 'Gunung Anyar Tambak', 'kode' => '60292'],
             ['kelurahan' => 'Rungkut Menanggal', 'kode' => '60293'],
             ['kelurahan' => 'Rungkut Tengah', 'kode' => '60294'],
             // Jambangan
             ['kelurahan' => 'Jambangan', 'kode' => '60241'],
             ['kelurahan' => 'Karah', 'kode' => '60242'],
             ['kelurahan' => 'Kebraon', 'kode' => '60243'],
             ['kelurahan' => 'Pagesangan', 'kode' => '60244'],
             // Karangpilang
             ['kelurahan' => 'Kedurus', 'kode' => '60211'],
             ['kelurahan' => 'Karang Pilang', 'kode' => '60212'],
             ['kelurahan' => 'Sumur Welut', 'kode' => '60213'],
             ['kelurahan' => 'Waru Gunung', 'kode' => '60214'],
             // Kenjeran
             ['kelurahan' => 'Bulak Banteng', 'kode' => '60191'],
             ['kelurahan' => 'Sidotopo Wetan', 'kode' => '60193'],
             ['kelurahan' => 'Tambak Wedi', 'kode' => '60194'],
             ['kelurahan' => 'Tanah Kali Kedinding', 'kode' => '60195'],
             // Krembangan
             ['kelurahan' => 'Dupak', 'kode' => '60175'],
             ['kelurahan' => 'Kemayoran', 'kode' => '60176'],
             ['kelurahan' => 'Krembangan Selatan', 'kode' => '60177'],
             ['kelurahan' => 'Morokrembangan', 'kode' => '60178'],
             ['kelurahan' => 'Perak Timur', 'kode' => '60179'],
             // Lakarsantri
             ['kelurahan' => 'Bangkingan', 'kode' => '60231'],
             ['kelurahan' => 'Jeruk', 'kode' => '60232'],
             ['kelurahan' => 'Lakarsantri', 'kode' => '60233'],
             ['kelurahan' => 'Lidah Kulon', 'kode' => '60234'],
             ['kelurahan' => 'Lidah Wetan', 'kode' => '60235'],
             // Mulyorejo
             ['kelurahan' => 'Kalijudan', 'kode' => '60111'],
             ['kelurahan' => 'Kalisari', 'kode' => '60112'],
             ['kelurahan' => 'Kejawan Putih Tambak', 'kode' => '60113'],
             ['kelurahan' => 'Manyar Sabrangan', 'kode' => '60114'],
             ['kelurahan' => 'Menur Pumpungan', 'kode' => '60115'],
             ['kelurahan' => 'Mulyorejo', 'kode' => '60116'],
             // Pabean Cantian
             ['kelurahan' => 'Bongkaran', 'kode' => '60131'],
             ['kelurahan' => 'Krembangan Utara', 'kode' => '60132'],
             ['kelurahan' => 'Nyamplungan', 'kode' => '60133'],
             ['kelurahan' => 'Perak Barat', 'kode' => '60134'],
             ['kelurahan' => 'Perak Utara', 'kode' => '60135'],
             // Pakal
             ['kelurahan' => 'Bringin', 'kode' => '60221'],
             ['kelurahan' => 'Sumberejo', 'kode' => '60222'],
             ['kelurahan' => 'Babat Jerawat', 'kode' => '60223'],
             ['kelurahan' => 'Pakal', 'kode' => '60224'],
             // Rungkut
             ['kelurahan' => 'Kalirungkut', 'kode' => '60241'],
             ['kelurahan' => 'Kedung Baruk', 'kode' => '60242'],
             ['kelurahan' => 'Medokan Ayu', 'kode' => '60243'],
             ['kelurahan' => 'Penjaringansari', 'kode' => '60244'],
             ['kelurahan' => 'Wonorejo', 'kode' => '60245'],
             // Sambikerep
             ['kelurahan' => 'Made', 'kode' => '60151'],
             ['kelurahan' => 'Lontar', 'kode' => '60152'],
             ['kelurahan' => 'Sambikerep', 'kode' => '60153'],
             ['kelurahan' => 'Bringin', 'kode' => '60154'],
             // Sawahan
             ['kelurahan' => 'Sawahan', 'kode' => '60251'],
             ['kelurahan' => 'Kepuhkembang', 'kode' => '60252'],
             ['kelurahan' => 'Kupang Krajan', 'kode' => '60253'],
             ['kelurahan' => 'Patemon', 'kode' => '60254'],
             ['kelurahan' => 'Petemon', 'kode' => '60255'],
             ['kelurahan' => 'Dukuh Kupang', 'kode' => '60256'],
             ['kelurahan' => 'Setro Baru', 'kode' => '60257'],
             // Semampir
             ['kelurahan' => 'Sidotopo', 'kode' => '60161'],
             ['kelurahan' => 'Ujung', 'kode' => '60162'],
             ['kelurahan' => 'Wonokusumo', 'kode' => '60163'],
             ['kelurahan' => 'Pegirian', 'kode' => '60164'],
             ['kelurahan' => 'Ampel', 'kode' => '60165'],
             // Simokerto
             ['kelurahan' => 'Sidodadi', 'kode' => '60171'],
             ['kelurahan' => 'Simokerto', 'kode' => '60172'],
             ['kelurahan' => 'Simolawang', 'kode' => '60173'],
             ['kelurahan' => 'Tambak Rejo', 'kode' => '60174'],
             ['kelurahan' => 'Kapasan', 'kode' => '60175'],
             // Sukolilo
             ['kelurahan' => 'Gebang Putih', 'kode' => '60181'],
             ['kelurahan' => 'Keputih', 'kode' => '60182'],
             ['kelurahan' => 'Klampis Ngasem', 'kode' => '60183'],
             ['kelurahan' => 'Medokan Semampir', 'kode' => '60184'],
             ['kelurahan' => 'Menur Pumpungan', 'kode' => '60185'],
             ['kelurahan' => 'Nginden Jangkungan', 'kode' => '60186'],
             ['kelurahan' => 'Semolowaru', 'kode' => '60187'],
             ['kelurahan' => 'Tegalsari', 'kode' => '60188'],
             // Sukomanunggal
             ['kelurahan' => 'Putat Jaya', 'kode' => '60191'],
             ['kelurahan' => 'Simomulyo', 'kode' => '60192'],
             ['kelurahan' => 'Simomulyo Baru', 'kode' => '60193'],
             ['kelurahan' => 'Sukomanunggal', 'kode' => '60194'],
             ['kelurahan' => 'Tanjungsari', 'kode' => '60195'],
             ['kelurahan' => 'Sonokwijenan', 'kode' => '60196'],
             // Tambaksari
             ['kelurahan' => 'Pacar Kembang', 'kode' => '60201'],
             ['kelurahan' => 'Pacar Keling', 'kode' => '60202'],
             ['kelurahan' => 'Ploso', 'kode' => '60203'],
             ['kelurahan' => 'Rangkah', 'kode' => '60204'],
             ['kelurahan' => 'Sidotopo Wetan', 'kode' => '60205'],
             ['kelurahan' => 'Tambaksari', 'kode' => '60206'],
             ['kelurahan' => 'Gading', 'kode' => '60207'],
             ['kelurahan' => 'Kapasari', 'kode' => '60208'],
             // Tandes
             ['kelurahan' => 'Manukan Kulon', 'kode' => '60211'],
             ['kelurahan' => 'Manukan Wetan', 'kode' => '60212'],
             ['kelurahan' => 'Tandes', 'kode' => '60213'],
             ['kelurahan' => 'Karang Poh', 'kode' => '60214'],
             ['kelurahan' => 'Balongsari', 'kode' => '60215'],
             ['kelurahan' => 'Banjar Sugihan', 'kode' => '60216'],
             // Tegalsari
             ['kelurahan' => 'Tegalsari', 'kode' => '60221'],
             ['kelurahan' => 'Dr. Soetomo', 'kode' => '60222'],
             ['kelurahan' => 'Keputran', 'kode' => '60223'],
             ['kelurahan' => 'Kedungdoro', 'kode' => '60224'],
             ['kelurahan' => 'Wonorejo', 'kode' => '60225'],
             // Tenggilis Mejoyo
             ['kelurahan' => 'Kendangsari', 'kode' => '60231'],
             ['kelurahan' => 'Kutisari', 'kode' => '60232'],
             ['kelurahan' => 'Panjang Jiwo', 'kode' => '60233'],
             ['kelurahan' => 'Tenggilis Mejoyo', 'kode' => '60234'],
             // Wiyung
             ['kelurahan' => 'Wiyung', 'kode' => '60241'],
             ['kelurahan' => 'Jajar Tunggal', 'kode' => '60242'],
             ['kelurahan' => 'Balasklumprik', 'kode' => '60243'],
             ['kelurahan' => 'Babatan', 'kode' => '60244'],
             ['kelurahan' => 'Karang Pilang', 'kode' => '60245'],
             ['kelurahan' => 'Kebraon', 'kode' => '60246'],
             // Wonocolo
             ['kelurahan' => 'Jemur Wonosari', 'kode' => '60251'],
             ['kelurahan' => 'Margorejo', 'kode' => '60252'],
             ['kelurahan' => 'Sidosermo', 'kode' => '60253'],
             ['kelurahan' => 'Siwalankerto', 'kode' => '60254'],
             ['kelurahan' => 'Tenggilis Mejoyo', 'kode' => '60255'],
             // Wonokromo
             ['kelurahan' => 'Jagir', 'kode' => '60261'],
             ['kelurahan' => 'Ngagel', 'kode' => '60262'],
             ['kelurahan' => 'Ngagelrejo', 'kode' => '60263'],
             ['kelurahan' => 'Sawunggaling', 'kode' => '60264'],
             ['kelurahan' => 'Darmo', 'kode' => '60265'],
             ['kelurahan' => 'Wonokromo', 'kode' => '60266'],
             ['kelurahan' => 'Jemur Wonosari', 'kode' => '60267'],
        ];

        foreach ($kodepos as $kp) {
            DB::table('kodepos')->insert([
                'kelurahan_id' => $kelurahan[$kp['kelurahan']],
                'kode' => $kp['kode'],
            ]);
        }
    }
}
