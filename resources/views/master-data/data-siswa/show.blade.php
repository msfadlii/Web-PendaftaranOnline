@extends('template')

@section('main-content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white d-flex ">
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <h2 class="mb-0" style="margin-left: 20px;">Detail Siswa</h2>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>NIK</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->users_nik }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Nama</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->nama }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Jenis Kelamin</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->jenisKelamin->jk }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Tempat Lahir</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->tempatLahir }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Tanggal Lahir</strong>
                </div>
                <div class="col-md-8">
                   : {{ $siswa->tglLahir }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Alamat</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->alamat }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>RT</strong>
                </div>
                <div class="col-md-8">
                   : {{ $siswa->rt }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>RW</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->rw }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Provinsi</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->provinsi->nama }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Kota</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->kota->nama }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Kecamatan</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->kecamatan->nama }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Kelurahan</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->kelurahan->nama }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Kode Pos</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->kodepos->kode }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>Nama Orang Tua</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->ortu }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <strong>No HP Orang Tua</strong>
                </div>
                <div class="col-md-8">
                    : {{ $siswa->no_hp }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection