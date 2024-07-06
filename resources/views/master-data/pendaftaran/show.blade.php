@extends('template')

@section('main-content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white d-flex ">
            <a href="{{ route('pendaftaran.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <h2 class="mb-0" style="margin-left: 20px;">Detail Pendaftaran Siswa</h2>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-4">
                    <h5 class="mb-0"><strong>NIK</strong></h5>
                </div>
                <div class="col-md-8">
                    <p class="mb-0">: {{ $data_pendaftar->users_nik }}</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <h5 class="mb-0"><strong>Nama</strong></h5>
                </div>
                <div class="col-md-8">
                    <p class="mb-0">: {{ $data_pendaftar->user->detailUser->nama }}</p>
                </div>
            </div>

            <!-- Status -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Diterima di Sekolah</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <dt class="col-md-4"><strong>Status</strong></dt>
                        <dd class="col-md-8">: {{ $data_pendaftar->status }}</dd>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection