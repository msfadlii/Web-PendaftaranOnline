<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Online</title>
    <link rel="icon" href="{{ asset('image/icon-1.png') }}" type="image/x-icon">
    @include('layouts.link')
</head>
<body id="page-top">
    @include('sweetalert::alert')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Login Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book-open-reader"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pendaftaran Online</div>
            </a>
        
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Pendaftaran
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('user.daftar.index') }}">
                    <i class="fas fa-fw fa-file-lines"></i>
                    <span>Daftar</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Siswa
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('user.siswa.index') }}">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Data Siswa</span>
                </a>
            </li>
        
            <hr class="sidebar-divider">
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Halo, {{ Auth::user()->detailUser->nama ?? 'User'}}
                                </span>
                    
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('icon/icon-user.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('akun.logout') }}" method="GET">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">

                    @yield('main-content')

                </div>
            </div>
            <!-- Footer -->
            @include('layouts.footer')
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>
</html>