@extends('template')

@section('main-content')

    <h1 class="h3 mb-4 text-gray-800">Data Sekolah</h1>
    <div class="">
        <a href="{{ route('sekolah.create') }}" class="btn btn-outline-success" >Tambah Data</a>
    </div>
    <div class="table-responsive">
        <table class="table table-light table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NPSN</th>
                    <th scope="col">Nama Sekolah</th>
                    <th scope="col">Alamat Sekolah</th>
                    <th scope="col">Pagu</th>
                    <th scope="col">Akreditasi</th>
                    <th scope="col">Kepala Sekolah</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_sekolah as $index => $sekolah)
                <tr onclick="window.location='{{ route('sekolah.show', $sekolah->npsn) }}'">
                    <th scope="row">{{ $index + 1 }}</th>
                    <th>{{ $sekolah->npsn }}</th>
                    <th>{{ $sekolah->nama_sekolah }}</th>
                    <th>{{ $sekolah->alamat_sekolah }}</th>
                    <th>{{ $sekolah->pagu }}</th>
                    <th>{{ $sekolah->akreditasi }}</th>
                    <th>{{ $sekolah->kepsek }}</th>
                    <th>
                        <a href="{{ route('sekolah.edit', $sekolah->npsn) }}">
                            <button class="btn btn-primary btn-sm">Edit</button>
                        </a> |
                        <form action="{{ route('sekolah.delete', $sekolah->npsn) }}" method="post" style="display:inline-block;">
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