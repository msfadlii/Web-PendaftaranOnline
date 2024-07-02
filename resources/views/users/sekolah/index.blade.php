@extends('users.template')
@section('main-content')
<h1 class="h3 mb-4 text-gray-800">Data Sekolah</h1>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection