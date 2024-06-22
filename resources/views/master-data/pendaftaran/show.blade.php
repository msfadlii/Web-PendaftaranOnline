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

            <!-- Pendaftaran Sekolah 1 -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Pendaftaran Sekolah 1</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <dl>
                            <div class="row mb-3">
                                <dt class="col-md-4"><strong>NPSN</strong></dt>
                                <dd class="col-md-8">: {{ $data_pendaftar->pilihan1Sekolah->npsn }}</dd>
                            </div>
                    
                            <div class="row mb-3">
                                <dt class="col-md-4"><strong>Nama Sekolah</strong></dt>
                                <dd class="col-md-8">: {{ $data_pendaftar->pilihan1Sekolah->nama_sekolah }}</dd>
                            </div>
                    
                            <div class="row mb-3">
                                <dt class="col-md-4"><strong>Alamat Sekolah</strong></dt>
                                <dd class="col-md-8">: {{ $data_pendaftar->pilihan1Sekolah->alamat_sekolah }}</dd>
                            </div>
                    
                            <div class="row mb-3">
                                <dt class="col-md-4"><strong>Akreditasi</strong></dt>
                                <dd class="col-md-8">: {{ $data_pendaftar->pilihan1Sekolah->akreditasi }}</dd>
                            </div>
                        </dl>
                    </p>
                </div>
            </div>

            <!-- Pendaftaran Sekolah 2 -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Pendaftaran Sekolah 2</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <dl>
                            <div class="row mb-3">
                                <dt class="col-md-4"><strong>NPSN</strong></dt>
                                <dd class="col-md-8">: {{ $data_pendaftar->pilihan2Sekolah->npsn }}</dd>
                            </div>
                    
                            <div class="row mb-3">
                                <dt class="col-md-4"><strong>Nama Sekolah</strong></dt>
                                <dd class="col-md-8">: {{ $data_pendaftar->pilihan2Sekolah->nama_sekolah }}</dd>
                            </div>
                    
                            <div class="row mb-3">
                                <dt class="col-md-4"><strong>Alamat Sekolah</strong></dt>
                                <dd class="col-md-8">: {{ $data_pendaftar->pilihan2Sekolah->alamat_sekolah }}</dd>
                            </div>
                    
                            <div class="row mb-3">
                                <dt class="col-md-4"><strong>Akreditasi</strong></dt>
                                <dd class="col-md-8">: {{ $data_pendaftar->pilihan2Sekolah->akreditasi }}</dd>
                            </div>
                        </dl>
                    </p>
                </div>
            </div>

            <!-- Diterima di Sekolah -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Diterima di Sekolah</h5>
                </div>
                <div class="card-body">
                    @if($data_pendaftar->diterimaSekolah)
                        <p class="card-text">
                            <dl>
                                <div class="row mb-3">
                                    <dt class="col-md-4"><strong>NPSN</strong></dt>
                                    <dd class="col-md-8">: {{ $data_pendaftar->diterimaSekolah->npsn }}</dd>
                                </div>
                        
                                <div class="row mb-3">
                                    <dt class="col-md-4"><strong>Nama Sekolah</strong></dt>
                                    <dd class="col-md-8">: {{ $data_pendaftar->diterimaSekolah->nama_sekolah }}</dd>
                                </div>
                        
                                <div class="row mb-3">
                                    <dt class="col-md-4"><strong>Alamat Sekolah</strong></dt>
                                    <dd class="col-md-8">: {{ $data_pendaftar->diterimaSekolah->alamat_sekolah }}</dd>
                                </div>
                        
                                <div class="row mb-3">
                                    <dt class="col-md-4"><strong>Akreditasi</strong></dt>
                                    <dd class="col-md-8">: {{ $data_pendaftar->diterimaSekolah->akreditasi }}</dd>
                                </div>
                            </dl>
                        </p>
                    @else
                        <p class="card-text">Belum diterima di sekolah mana pun.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection