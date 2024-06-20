@extends('template')

@section('main-content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Edit Sekolah</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('sekolah.update', $sekolah->npsn) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="npsn">NPSN</label>
                    <input type="text" class="form-control" id="npsn" name="npsn" value="{{ $sekolah->npsn }}" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="{{ $sekolah->nama_sekolah }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="alamat_sekolah">Alamat Sekolah</label>
                    <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" value="{{ $sekolah->alamat_sekolah }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="provinsi_id">Provinsi</label>
                    <select class="form-control" id="provinsi_id" name="provinsi_id" required>
                        @foreach($provinsi as $prov)
                            <option value="{{ $prov->id }}" {{ $sekolah->provinsi_id == $prov->id ? 'selected' : '' }}>{{ $prov->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kota_id">Kota</label>
                    <select class="form-control" id="kota_id" name="kota_id" required>
                        @foreach($kota as $kt)
                            <option value="{{ $kt->id }}" {{ $sekolah->kota_id == $kt->id ? 'selected' : '' }}>{{ $kt->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kecamatan_id">Kecamatan</label>
                    <select class="form-control" id="kecamatan_id" name="kecamatan_id" required>
                        @foreach($kecamatan as $kc)
                            <option value="{{ $kc->id }}" {{ $sekolah->kecamatan_id == $kc->id ? 'selected' : '' }}>{{ $kc->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kelurahan_id">Kelurahan</label>
                    <select class="form-control" id="kelurahan_id" name="kelurahan_id" required>
                        @foreach($kelurahan as $kl)
                            <option value="{{ $kl->id }}" {{ $sekolah->kelurahan_id == $kl->id ? 'selected' : '' }}>{{ $kl->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kodepos_id">Kode Pos</label>
                    <select class="form-control" id="kodepos_id" name="kodepos_id" required>
                        @foreach($kodepos as $kp)
                            <option value="{{ $kp->id }}" {{ $sekolah->kodepos_id == $kp->id ? 'selected' : '' }}>{{ $kp->kode }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $sekolah->email }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $sekolah->no_hp }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="pagu">Pagu</label>
                    <input type="number" class="form-control" id="pagu" name="pagu" value="{{ $sekolah->pagu }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="akreditasi">Akreditasi</label>
                    <select class="form-control" name="akreditasi" id="akreditasi" required>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="kepsek">Kepala Sekolah</label>
                    <input type="text" class="form-control" id="kepsek" name="kepsek" value="{{ $sekolah->kepsek }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
