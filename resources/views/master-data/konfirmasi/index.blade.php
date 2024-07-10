@extends('template')
@section('main-content')
<h1 class="h3 mb-4 text-gray-800">Data Siswa</h1>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Konfirmasi Siswa Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endif
@if (session('reject'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Konfirmasi Siswa DiTolak!',
            text: '{{ session('reject') }}',
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endif
@if (session('delete'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Konfirmasi Siswa DiHapus!',
            text: '{{ session('delete') }}',
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endif
<div class="table-responsive">
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_siswa as $index => $siswa)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <th>{{ $siswa->users_nik }}</th>
                <th>{{ $siswa->nama }}</th> 
                <th>{{ $siswa->status->nama_status }}</th>
                <th>
                    <form id="confirmForm_{{ $siswa->users_nik }}" action="{{ route('konfirm.confirm', $siswa->users_nik) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="button" class="btn btn-success btn-sm" onclick="confirmSiswa('{{ $siswa->users_nik }}')">Konfirmasi</button>
                    </form>
                    <form id="rejectForm_{{ $siswa->users_nik }}" action="{{ route('konfirm.reject', $siswa->users_nik) }}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="button" class="btn btn-danger btn-sm" onclick="rejectSiswa('{{ $siswa->users_nik }}')">Tolak</button>
                    </form>
                    <form id="deleteForm_{{ $siswa->users_nik }}" action="{{ route('konfirm.delete', $siswa->users_nik) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-warning btn-sm" onclick="deleteConfirmation('{{ $siswa->users_nik }}')">Hapus Konfirmasi</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    function confirmSiswa(nik) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan mengkonfirmasi siswa ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Konfirmasi!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form jika user mengkonfirmasi
                document.getElementById('confirmForm_' + nik).submit();
            }
        });
    }

    function rejectSiswa(nik) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan menolak konfirmasi siswa ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Tolak!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form jika user menolak
                document.getElementById('rejectForm_' + nik).submit();
            }
        });
    }   

    function deleteConfirmation(nik) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan menghapus konfirmasi siswa ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form jika user ingin menghapus
                document.getElementById('deleteForm_' + nik).submit();
            }
        });
    }
</script>
@endsection