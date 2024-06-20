@extends('template')

@section('main-content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Edit Siswa</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('siswa.update', $siswa->users_nik) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="users_nik">NIK</label>
                    <input type="text" class="form-control" id="users_nik" name="users_nik" value="{{ $siswa->users_nik }}" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="jk_id">Jenis Kelamin</label>
                    <select class="form-control" id="jk_id" name="jk_id" required>
                        @foreach($jenisKelamin as $jk)
                            <option value="{{ $jk->id }}" {{ $siswa->jk_id == $jk->id ? 'selected' : '' }}>{{ $jk->jk }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="{{ $siswa->tempatLahir }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="tglLahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tglLahir" name="tglLahir" value="{{ $siswa->tglLahir }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $siswa->alamat }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="rt">RT</label>
                    <input type="number" class="form-control" id="rt" name="rt" value="{{ $siswa->rt }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="rw">RW</label>
                    <input type="number" class="form-control" id="rw" name="rw" value="{{ $siswa->rw }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="provinsi_id">Provinsi</label>
                    <select class="form-control" id="provinsi_id" name="provinsi_id" required>
                        @foreach($provinsi as $prov)
                            <option value="{{ $prov->id }}" {{ $siswa->provinsi_id == $prov->id ? 'selected' : '' }}>{{ $prov->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kota_id">Kota</label>
                    <select class="form-control" id="kota_id" name="kota_id" required>
                        @foreach($kota as $kt)
                            <option value="{{ $kt->id }}" {{ $siswa->kota_id == $kt->id ? 'selected' : '' }}>{{ $kt->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kecamatan_id">Kecamatan</label>
                    <select class="form-control" id="kecamatan_id" name="kecamatan_id" required>
                        @foreach($kecamatan as $kc)
                            <option value="{{ $kc->id }}" {{ $siswa->kecamatan_id == $kc->id ? 'selected' : '' }}>{{ $kc->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kelurahan_id">Kelurahan</label>
                    <select class="form-control" id="kelurahan_id" name="kelurahan_id" required>
                        @foreach($kelurahan as $kl)
                            <option value="{{ $kl->id }}" {{ $siswa->kelurahan_id == $kl->id ? 'selected' : '' }}>{{ $kl->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kodepos_id">Kode Pos</label>
                    <select class="form-control" id="kodepos_id" name="kodepos_id" required>
                        @foreach($kodepos as $kp)
                            <option value="{{ $kp->id }}" {{ $siswa->kodepos_id == $kp->id ? 'selected' : '' }}>{{ $kp->kode }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="ortu">Nama Orang Tua</label>
                    <input type="text" class="form-control" id="ortu" name="ortu" value="{{ $siswa->ortu }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="no_hp">No HP Orang Tua</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $siswa->no_hp }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
