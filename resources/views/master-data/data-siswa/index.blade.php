@extends('template')
@section('main-content')
<h1 class="h3 mb-4 text-gray-800">Data Siswa</h1>
@if (session('success-update'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Data Siswa Berhasil diUpdate!',
            text: '{{ session('success-update') }}',
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
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Orang Tua</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_siswa as $index => $siswa)
            <tr onclick="redirectToDetail('{{ route('siswa.show', $siswa->users_nik) }}')">
                <th scope="row">{{ $index + 1 }}</th>
                <th>{{ $siswa->users_nik }}</th>
                <th>{{ $siswa->nama }}</th> 
                <th>{{ $siswa->jenisKelamin->jk }}</th>
                <th>{{ $siswa->alamat }}</th>
                <th>{{ $siswa->ortu }}</th>
                <th>{{ $siswa->no_hp }}</th>
                <th>
                    <a href="{{ route('siswa.edit', $siswa->users_nik) }}">
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </a> |
                    <form id="deleteForm_{{ $siswa->users_nik }}" action="{{ route('siswa.delete', $siswa->users_nik) }}" method="post" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteConfirmation('{{ $siswa->users_nik }}')">Hapus</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    function redirectToDetail(url) {
        // Avoid redirection to detail page when clicking on delete button
        const targetElement = event.target.tagName.toLowerCase();
        if (targetElement !== 'button' && targetElement !== 'a') {
            window.location.href = url;
        }
    }

    function deleteConfirmation(nik) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Anda akan menghapus data siswa ini!",
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