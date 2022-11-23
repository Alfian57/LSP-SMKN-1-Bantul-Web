<div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0 mb-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="Logo" class="img-fluid logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a href="/beranda"
                        class="nav-item nav-link {{ request()->is('beranda') ? 'active' : '' }}">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu m-0">
                            <a href="/visi-misi"
                                class="dropdown-item {{ request()->is('visi-misi') ? 'active' : '' }}">Visi Misi</a>
                            <a href="/struktur-organisasi"
                                class="dropdown-item {{ request()->is('struktur-organisasi') ? 'active' : '' }}">Struktur
                                Organisasi</a>
                        </div>
                    </div>
                    <a href="/permohonan-kompetensi"
                        class="nav-item nav-link {{ request()->is('permohonan-kompetensi') ? 'active' : '' }}">Uji
                        Kompetensi</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sertifikasi</a>
                        <div class="dropdown-menu m-0">
                            <a href="/skema-sertifikasi"
                                class="dropdown-item {{ request()->is('skema-sertifikasi') ? 'active' : '' }}">Skema
                                Sertifikasi</a>
                            <a href="/tempat-unit-kompetensi"
                                class="dropdown-item {{ request()->is('tuk') ? 'active' : '' }}">Tempat
                                Uji Kompetensi</a>
                        </div>
                    </div>
                    <a href="/kontak" class="nav-item nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
                </ul>
                <div class="d-flex">
                    @if (Auth::guard('user')->check())
                        <a href="/dashboard"><i class="fa-solid fa-table-columns me-4 mt-2 text-white"></i></a>
                        <form action="/admin/logout" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Logout ?')">Logout</button>
                        </form>
                    @elseif(Auth::guard('siswa')->check())
                        <a href="/dashboard"><i class="fa-solid fa-table-columns me-4 mt-2 text-white"></i></a>
                        <form action="/siswa/logout" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Logout ?')">Logout</button>
                        </form>
                    @else
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#loginModal">
                            Login
                        </button>
                    @endauth

            </div>
        </div>
    </div>
</nav>
</div>
