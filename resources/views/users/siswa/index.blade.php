@extends('users.template')
@section('main-content')
@if($siswa)
    <div class="container mt-5">
        @if(session('status'))
            <div class="alert alert-info mt-3">
                {{ session('status') }}
            </div>
        @endif
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Login Berhasil!',
                    text: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>
        @endif
        @if (session('success-daftar'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Pendaftaran Berhasil!',
                    text: '{{ session('success-daftar') }}',
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>
        @endif
        <div class="alert
        @if($siswa->status->nama_status == 'Diterima')
            alert-success
        @elseif($siswa->status->nama_status == 'Ditolak')
            alert-danger
        @else
            alert-primary
        @endif
        d-flex align-items-center">
            <h4 class="alert-heading mb-0" style="margin-left: 20px;">
                @if($siswa->status->nama_status == 'Diterima')
                    <i class="fas fa-check-circle"></i> <span class="ml-2">Selamat Anda Telah Diterima di SD 5</span>
                @elseif($siswa->status->nama_status == 'Ditolak')
                    <i class="fas fa-times-circle"></i> <span class="ml-2">Mohon Maaf Anda Belum Diterima, Tetap Semangat dan Jangan Berkecil Hati</span>
                @else
                    <i class="fas fa-spinner fa-spin"></i> <span class="ml-2">Mohon Tunggu Konfirmasi dari Admin</span>
                @endif
            </h4>
        </div>
        <div class="card"> 
            <div class="card-header 
            @if($siswa->status->nama_status == 'Diterima')
                bg-success text-white
            @elseif($siswa->status->nama_status == 'Ditolak')
                bg-danger text-white
            @else
                bg-primary text-white
            @endif 
            text-white d-flex ">
                <h2 class="mb-0" style="margin-left: 20px;">Data Siswa</h2>
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
@else
    <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">Data Tidak Ditemukan</h4>
        <p>Data Siswa belum ada. Harap mendaftar terlebih dahulu.</p>
        <hr>
        <p class="mb-0">Jika Anda sudah mendaftar dan masih melihat pesan ini, silakan hubungi admin.</p>
    </div>
@endif
@endsection