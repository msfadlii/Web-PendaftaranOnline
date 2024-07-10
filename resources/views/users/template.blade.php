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
                @include('layouts.topbar')

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