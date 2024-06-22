@extends('template')
@section('main-content')
<h1 class="h3 mb-4 text-gray-800">Pendaftaran Siswa</h1>
<div class="table-responsive">
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Pilihan 1</th>
                <th scope="col">Pilihan 2</th>
                <th scope="col">Sekolah Diterima</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pendaftar as $index => $daftar)
            <tr onclick="window.location='{{ route('pendaftaran.show', $daftar->users_nik) }}'">
                <th scope="row">{{ $index + 1 }}</th>
                <th>{{ $daftar->users_nik }}</th>
                <th>{{ $daftar->user->detailUser->nama }}</th>
                <th>{{ $daftar->pilihan1Sekolah->nama_sekolah }}</th>
                <th>{{ $daftar->pilihan2Sekolah->nama_sekolah }}</th>
                <th>{{ $daftar->diterimaSekolah->nama_sekolah }}</th>
                <th>
                    <form action="{{ route('pendaftaran.delete', $daftar->users_nik) }}" method="post" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection