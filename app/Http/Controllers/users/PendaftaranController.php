<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\DetailUser;
use App\Models\Pendaftaran;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data_pendaftar = Pendaftaran::with(['user.detailUser', 'pilihan1Sekolah', 'pilihan2Sekolah', 'diterimaSekolah'])->get();
        return view('master-data.pendaftaran.index', compact('data_pendaftar'));
    }

    public function daftarSekolah(Request $request)
    {
        $request->validate([
            'users_nik' => 'required|exists:user,nik',
            'sekolah1_id' => 'required|exists:sekolah,npsn',
            'sekolah2_id' => 'required|exists:sekolah,npsn',
        ]);

        $siswa = User::findOrFail($request->users_nik);
        $sekolah1 = Sekolah::findOrFail($request->sekolah1_id);
        $sekolah2 = Sekolah::findOrFail($request->sekolah2_id);

        $jumlahPendaftarSekolah1 = Pendaftaran::where('npsn', $sekolah1->npsn)
                                         ->whereNotNull('diterima')
                                         ->count();
                                
        $hitungPagu1 = $sekolah1->pagu - $jumlahPendaftarSekolah1;
        if ($hitungPagu1 > 0) {
            // Siswa diterima di sekolah pertama
            Pendaftaran::create([
                'users_nik' => $siswa->nik,
                'pilihan1_sekolah' => $sekolah1->npsn,
                'pilihan2_sekolah' => $sekolah2->npsn,
                'diterima' => $sekolah1->npsn,
            ]);
    
            return redirect()->route('home')->with('success', 'Selamat! Anda diterima di ' . $sekolah1->nama_sekolah);
        } else {
            $jumlahPendaftarSekolah2 = Pendaftaran::where('npsn', $sekolah2->npsn)
                                                 ->whereNotNull('diterima')
                                                 ->count();
    
            $hitungPagu2 = $sekolah2->pagu - $jumlahPendaftarSekolah2;
    
            if ($hitungPagu2 > 0) {
                // Siswa diterima di sekolah kedua
                Pendaftaran::create([
                    'users_nik' => $siswa->nik,
                    'pilihan1_sekolah' => $sekolah1->npsn,
                    'pilihan2_sekolah' => $sekolah2->npsn,
                    'diterima' => $sekolah2->npsn,
                ]);
    
                return redirect()->route('home')->with('success', 'Selamat! Anda diterima di ' . $sekolah2->nama_sekolah);
            } else {
                return redirect()->route('home')->with('error', 'Maaf, semua kursi di sekolah pilihan Anda sudah penuh.');
            }
        }
    }

    public function show($nik)
    {
        $data_pendaftar = Pendaftaran::with(['user.detailUser', 'pilihan1Sekolah', 'pilihan2Sekolah', 'diterimaSekolah'])->where('users_nik', $nik)->firstOrFail();
        return view('master-data.pendaftaran.show', compact('data_pendaftar'));
    }

    public function edit()
    {

    }

    public function update(Request $request, $nik)
    {
        $request->validate([
            'pilihan1_sekolah' => 'required|exists:sekolah,npsn',
            'pilihan2_sekolah' => 'required|exists:sekolah,npsn',
        ]);
    
        $pendaftaran = Pendaftaran::where('user_id', $nik)->firstOrFail();
        $pendaftaran->update($request->all());
    
        return redirect()->route('pendaftaran.show', $nik)->with('success', 'Pendaftaran berhasil diperbarui.');
    }

    public function destroy($nik)
    {
        $data_pendaftar = Pendaftaran::findOrFail($nik);

        $data_pendaftar->delete();

        return redirect()->route('pendaftaran.index')->with('success', 'Data Pendaftaran berhasil dihapus');
    }
}
