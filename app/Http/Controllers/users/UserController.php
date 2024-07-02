<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\DetailUser;
use App\Models\JenisKelamin;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\KodePos;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index()
    {
        return view('users.template');
    }

    public function siswa_index()
    {
        $nik = Auth::user()->nik;
        $siswa = DetailUser::with(['provinsi', 'kota', 'kecamatan', 'kelurahan', 'kodepos'])->where('users_nik', $nik)->first();
        return view('users.siswa.index', compact('siswa'));
    }

    public function sekolah_index()
    {
        $data_sekolah = Sekolah::all();

        return view('users.sekolah.index', compact('data_sekolah'));
    }

    public function daftar_index()
    {
        $nik = Auth::user()->nik;
        $jenisKelamin = JenisKelamin::all();
        $provinsi = Provinsi::all();
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        $kodepos = KodePos::all();
        
        return view('users.daftar.index', compact('nik', 'jenisKelamin', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'kodepos'));
    }

    public function daftar_store(Request $request): RedirectResponse
    {
        $request->validate([
            'nik' => 'required|numeric',
            'nama' => 'required',
            'jk_id' => 'required',
            't_l' => 'required',
            'tgl_l' => 'required|date',
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

        DetailUser::create([
            'users_nik' => $request->nik,
            'nama' => $request->nama,
            'jk_id' => $request->input('jk_id'),
            'tempatLahir' => $request->t_l,
            'tglLahir' => $request->tgl_l,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'provinsi_id' => $request->input('provinsi_id'),
            'kota_id' => $request->input('kota_id'),
            'kecamatan_id' => $request->input('kecamatan_id'),
            'kelurahan_id' => $request->input('kelurahan_id'),
            'kodepos_id' => $request->input('kodepos_id'),
            'ortu' => $request->ortu,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('user.siswa.index');
    }

    public function laporan_index()
    {
        return view('users.laporan.index');
    }
}
