<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use App\Models\JenisKelamin;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\KodePos;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('master-data.data-siswa.index');
    }

    public function show($nik)
    {
        $siswa = DetailUser::with(['provinsi', 'kota', 'kecamatan', 'kelurahan', 'kodepos'])->where('users_nik', $nik)->firstOrFail();

        return view('master-data.data-siswa.show', compact('siswa'));
    }

    public function edit($nik)
    {   
        $siswa = DetailUser::with(['jenisKelamin', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'kodepos'])->where('users_nik', $nik)->firstOrFail();

        $jenisKelamin = JenisKelamin::all();
        $provinsi = Provinsi::all();
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        $kodepos = KodePos::all();

        return view('master-data.data-siswa.edit', compact('siswa', 'jenisKelamin', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'kodepos'));
    }

    public function update(Request $request, $nik)
    {
        $request->validate([
            'users_nik' => 'required|numeric',
            'nama' => 'required',
            'jk_id' => 'required',
            'tempatLahir' => 'required',
            'tglLahir' => 'required|date',
            'alamat' => 'required',
            'rt' => 'required|integer',
            'rw' => 'required|integer',
            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'kodepos_id' => 'required',
            'ortu' => 'required',
            'no_hp' => 'required',
        ]);

        $siswa = DetailUser::where('users_nik', $nik)->firstOrFail();
        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($nik)
    {
        $siswa = DetailUser::findOrFail($nik);

        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus');
    }
}
