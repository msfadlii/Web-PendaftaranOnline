<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book-open-reader"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pendaftaran Online</div>
    </a>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Siswa
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('user.data_siswa.index') }}">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Data Siswa</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Sekolah
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
            <i class="fas fa-fw fa-school"></i>
            <span>Data Sekolah</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Pendaftaran
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
            <i class="fas fa-fw fa-file-lines"></i>
            <span>Daftar</span>
        </a>
        <a class="nav-link collapsed" href="#">
            <i class="fas fa-fw fa-rectangle-list"></i>
            <span>Laporan</span>
        </a>
    </li>
</ul>