@extends('users.template')
@section('main-content')
    <h1 class="h3 mb-4 text-gray-800">Pendaftaran</h1>

    <form action="{{ route('user.daftar.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label class="font-weight-bold">NIK</label>
            <input type="text" class="form-control @error('npsn') is-invalid @enderror" name="nik" value="{{ $nik }}" readonly>
        </div>
        <div class="form-group mb-3">
            <label class="font-weight-bold">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama">
            @error('nama')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="font-weight-bold">Jenis Kelamin</label>
            <select class="form-control" id="jk_id" name="jk_id" required>
                @foreach($jenisKelamin as $jk)
                    <option value="{{ $jk->id }}">{{ $jk->jk }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label class="font-weight-bold">Tempat Lahir</label>
            <input type="text" class="form-control @error('t_l') is-invalid @enderror" name="t_l" placeholder="Tempat Lahir">
            @error('t_l')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="font-weight-bold">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tgl_l') is-invalid @enderror" name="tgl_l" placeholder="Tanggal Lahir">
            @error('tgl_l')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-group mb-3">
            <label class="font-weight-bold">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Alamat">
            @error('alamat')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-group mb-3">
            <label class="font-weight-bold">RT</label>
            <input type="number" class="form-control @error('rt') is-invalid @enderror" name="rt" placeholder="RT">
            @error('rt')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-group mb-3">
            <label class="font-weight-bold">RW</label>
            <input type="number" class="form-control @error('rw') is-invalid @enderror" name="rw" placeholder="RW">
            @error('rw')
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
            <label class="font-weight-bold">Orang Tua</label>
            <input type="text" class="form-control @error('ortu') is-invalid @enderror" name="ortu" placeholder="Orang Tua">
            @error('ortu')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-group mb-3">
            <label class="font-weight-bold">No HP</label>
            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" placeholder="No HP">
            @error('no_hp')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection