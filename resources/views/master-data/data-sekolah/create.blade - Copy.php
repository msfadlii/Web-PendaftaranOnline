@extends('template')
@section('main-content')
<h1 class="h3 mb-4 text-gray-800">Tambah Data Sekolah</h1>
    
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
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
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Sekolah">
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Alamat Sekolah</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" placeholder="Masukkan Alamat Sekolah">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- <div class="form-group mb-4">
                                <label class="font-weight-bold">Provinsi</label>
                                <select class="form-control" name="provinsi" id="provinsi" aria-label="Default select example">
                                    @foreach ($provinsi as $prov)
                                        <option value="{{ $prov->id }}">{{ $prov->nama }}</option> 
                                    @endforeach
                                </select>
                                @error('provinsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Kota</label>
                                <select class="form-control" name="kota" id="kota">
                                    @foreach ($kota as $kot)
                                        <option value="{{ $kot->id }}">{{ $kot->nama }}</option> 
                                    @endforeach
                                </select>
                                @error('kota')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Kecamatan</label>
                                <select class="form-control" name="kecamatan" id="kecamatan">
                                    @foreach ($kecamatan as $kec)
                                        <option value="{{ $kec->id }}">{{ $kec->nama }}</option> 
                                    @endforeach
                                </select>
                                @error('kecamatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Kelurahan</label>
                                <select class="form-control" name="kelurahan" id="kelurahan">
                                    @foreach ($kelurahan as $kel)
                                        <option value="{{ $kel->id }}">{{ $kel->nama }}</option> 
                                    @endforeach
                                </select>
                                @error('kelurahan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Kode Pos</label>
                                <select class="form-control" name="kodepos" id="kodepos">
                                    @foreach ($kodepos as $kodp)
                                        <option value="{{ $kodp->id }}">{{ $kodp->kode }}</option> 
                                    @endforeach
                                </select>
                                @error('kodepos')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}

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
                                <input type="text" class="form-control @error('noHp') is-invalid @enderror" name="noHp" value="{{ old('noHp') }}" placeholder="Masukkan Nomor Hp Sekolah">
                                @error('noHp')
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

                            {{-- <div class="form-group mb-3">
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
                            </div> --}}

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
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection