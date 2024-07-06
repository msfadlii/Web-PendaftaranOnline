<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="icon" href="{{ asset('image/icon-1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xxl-11">
                    <div class="card border-light-subtle shadow-sm">
                        <div class="row g-0">
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center">
                                <div class="card-body p-3 p-md-4 p-xl-5 text-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5">
                                            <div class="text-center mb-4">
                                                <a>
                                                    <img src="{{ asset('image/logo-1.png') }}" alt="BootstrapBrain Logo" width="100" height="100">
                                                </a>
                                            </div>
                                            <h4 class="text-center"><b>Buat Akun</b> Anda Sekarang</h4>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <form action="{{ route('akun.prosesRegister') }}" method="post">
                                        @csrf
                                        <div class="row gy-3 overflow-hidden">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control  @error('nik') is-invalid @enderror" name="nik" id="nik" value="{{ old('nik') }}" placeholder="NIK">
                                                    <label for="nik" class="form-label">NIK</label>
                                                    @error('nik')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="Password">
                                                    <label for="password" class="form-label">Password</label>
                                                    @error('password')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="" placeholder="Konfirmasi Password">
                                                    <label for="password" class="form-label">Konfirmasi Password</label>
                                                    @error('password_confirmation')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn bsb-btn-xl btn-dark py-3" type="submit">Buat Akun</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="mt-5">
                                        <a href="{{ route('akun.login') }}" class="link-secondary text-decoration-none">Sudah Memiliki Akun</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <img class="img-fluid rounded-start w-100 h-100 object-fit-cover " loading="lazy" src="{{ asset('image/sd-image-1.png') }}" alt="Gambar Siswa dan Siswi Sekolah Dasar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>