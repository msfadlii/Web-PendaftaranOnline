@extends('template')

@section('main-content')

<h1 class="h3 mb-4 text-gray-800">Tambah Data Sekolah</h1>
<form action="{{ route('sekolah.store') }}" method="post">
    @csrf
    <div class="form-group mb-3">
        <label class="font-weight-bold">NPSN</label>
        <input type="text" class="form-control @error('npsn') is-invalid @enderror" name="npsn" placeholder="Masukkan NPSN">
        @error('npsn')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Nama Sekolah</label>
        <input type="text" class="form-control @error('nama_sekolah') is-invalid @enderror" name="nama_sekolah" value="{{ old('nama_sekolah') }}" placeholder="Masukkan Nama Sekolah">
        @error('nama_sekolah')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Alamat Sekolah</label>
        <textarea class="form-control @error('alamat_sekolah') is-invalid @enderror" name="alamat_sekolah" rows="5" placeholder="Masukkan Alamat Sekolah">{{ old('alamat_sekolah') }}</textarea>
        @error('alamat_sekolah')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-4">
        <label class="font-weight-bold">Provinsi</label>
        <select class="form-control" name="provinsi_id" id="provinsi_id" aria-label="Default select example">
            @foreach ($provinsi as $prov)
                <option value="{{ $prov->id }}">{{ $prov->nama }}</option> 
            @endforeach
        </select>
        @error('provinsi_id')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Kota</label>
        <select class="form-control" name="kota_id" id="kota_id">
            @foreach ($kota as $kot)
                <option value="{{ $kot->id }}">{{ $kot->nama }}</option> 
            @endforeach
        </select>
        @error('kota_id')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Kecamatan</label>
        <select class="form-control" name="kecamatan_id" id="kecamatan_id">
            @foreach ($kecamatan as $kec)
                <option value="{{ $kec->id }}">{{ $kec->nama }}</option> 
            @endforeach
        </select>
        @error('kecamatan_id')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Kelurahan</label>
        <select class="form-control" name="kelurahan_id" id="kelurahan_id">
            @foreach ($kelurahan as $kel)
                <option value="{{ $kel->id }}">{{ $kel->nama }}</option> 
            @endforeach
        </select>
        @error('kelurahan_id')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Kode Pos</label>
        <select class="form-control" name="kodepos_id" id="kodepos_id">
            @foreach ($kodepos as $kodp)
                <option value="{{ $kodp->id }}">{{ $kodp->kode }}</option> 
            @endforeach
        </select>
        @error('kodepos_id')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Email Sekolah</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email Sekolah">
        @error('email')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Nomor Hp Sekolah</label>
        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukkan Nomor Hp Sekolah">
        @error('no_hp')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Pagu</label>
        <input type="number" class="form-control @error('pagu') is-invalid @enderror" name="pagu" value="{{ old('pagu') }}">
        @error('pagu')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Akreditasi</label>
        <select class="form-control" name="akreditasi" id="akreditasi">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        @error('akreditasi')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Kepala Sekolah</label>
        <input type="text" class="form-control @error('kepsek') is-invalid @enderror" name="kepsek" value="{{ old('kepsek') }}" placeholder="Masukkan Kepala Sekolah">
        @error('kepsek')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection