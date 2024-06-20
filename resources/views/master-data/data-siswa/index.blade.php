@extends('template')
@section('main-content')
<h1 class="h3 mb-4 text-gray-800">Data Siswa</h1>
<div class="table-responsive">
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_siswa as $index => $siswa)
            <tr onclick="window.location='{{ route('siswa.show', $siswa->users_nik) }}'">
                <th scope="row">{{ $index + 1 }}</th>
                <th>{{ $siswa->users_nik }}</th>
                <th>{{ $siswa->nama }}</th>
                <th>{{ $siswa->jenisKelamin->jk }}</th>
                <th>{{ $siswa->alamat }}</th>
                <th>
                    <a href="{{ route('siswa.edit', $siswa->users_nik) }}">
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </a> |
                    <form action="{{ route('siswa.delete', $siswa->users_nik) }}" method="post" style="display:inline-block;">
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