<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\KodePos;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use App\Models\Sekolah;
use Illuminate\Http\RedirectResponse;

class SekolahController extends Controller
{
    public function index()
    {
        $data_sekolah = Sekolah::all();
        return view('master-data.data-sekolah.index', compact('data_sekolah'));
    }

    public function create()
    {
        $provinsi = Provinsi::all();
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        $kodepos = KodePos::all();

        return view('master-data.data-sekolah.create', compact('provinsi', 'kota', 'kecamatan', 'kelurahan', 'kodepos'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'npsn' => 'required|integer',
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'kodepos_id' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'pagu' => 'required|integer',
            'akreditasi' => 'required',
            'kepsek' => 'required',
        ]);

        Sekolah::create([
            'npsn' => $request->npsn,
            'nama_sekolah' => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'provinsi_id' => $request->input('provinsi_id'),
            'kota_id' => $request->input('kota_id'),
            'kecamatan_id' => $request->input('kecamatan_id'),
            'kelurahan_id' => $request->input('kelurahan_id'),
            'kodepos_id' => $request->input('kodepos_id'),
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'pagu' => $request->pagu,
            'akreditasi' => 'A',
            'kepsek' => $request->kepsek,
        ]);

        return redirect()->route('sekolah.index');
    }

    public function show($npsn)
    {
        $sekolah = Sekolah::with(['provinsi', 'kota', 'kecamatan', 'kelurahan', 'kodepos'])->where('npsn', $npsn)->firstOrFail();

        return view('master-data.data-sekolah.show', compact('sekolah'));
    }

    public function edit($npsn)
    {   
        $sekolah = Sekolah::with(['provinsi', 'kota', 'kecamatan', 'kelurahan', 'kodepos'])->where('npsn', $npsn)->firstOrFail();

        $provinsi = Provinsi::all();
        $kota = Kota::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        $kodepos = KodePos::all();

        return view('master-data.data-sekolah.edit', compact('sekolah', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'kodepos'));
    }

    public function update(Request $request, $npsn)
    {
        $request->validate([
            'npsn' => 'required|integer',
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'kodepos_id' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'pagu' => 'required|integer',
            'akreditasi' => 'required',
            'kepsek' => 'required',
        ]);

        $sekolah = Sekolah::where('npsn', $npsn)->firstOrFail();
        $sekolah->update($request->all());

        return redirect()->route('sekolah.index')->with('success', 'Data sekolah berhasil diperbarui.');
    }

    public function destroy($npsn)
    {
        $sekolah = Sekolah::findOrFail($npsn);

        $sekolah->delete();

        return redirect()->route('sekolah.index')->with('success', 'Data sekolah berhasil dihapus');
    }
}
