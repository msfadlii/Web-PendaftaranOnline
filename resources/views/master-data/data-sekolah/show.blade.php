@extends('template')

@section('main-content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Detail Sekolah</h2>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>NPSN:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->npsn }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Nama:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->nama_sekolah }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Alamat:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->alamat_sekolah }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Provinsi:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->provinsi->nama }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Kota:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->kota->nama }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Kecamatan:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->kecamatan->nama }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Kelurahan:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->kelurahan->nama }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Kode Pos:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->kodepos->kode }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Email:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->email }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>No HP:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->no_hp }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Pagu:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->pagu }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Akreditasi:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->akreditasi }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Kepala Sekolah:</strong>
                </div>
                <div class="col-md-8">
                    {{ $sekolah->kepsek }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection