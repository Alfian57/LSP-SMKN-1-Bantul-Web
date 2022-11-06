<div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
    <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
        <a href="index.html" class="navbar-brand">
            <h1 class="m-0 display-4 text-uppercase text-white"><img src="/img/logo.png" alt="Logo"
                    class="img-fluid me-2 logo"></i>LSP</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#" class="nav-item nav-link active">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Visi Misi</a>
                        <a href="#" class="dropdown-item">Struktur Organisasi</a>
                        <a href="#" class="dropdown-item">Lokasi</a>
                    </div>
                </div>
                <a href="#" class="nav-item nav-link">Uji Kompetensi</a>
                <a href="#" class="nav-item nav-link">Sertifikasi</a>
                <a href="#" class="nav-item nav-link">Kontak</a>
                @if (Auth::check())
                    <form action="/admin/logout" method="post"
                        class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">
                        @csrf
                        <button type="submit" class="btn bg-transparent text-white"
                            onclick="return confirm('Apakah Anda Ingin Logout ?')">Logout</button>
                        <i class="bi bi-arrow-left"></i>
                    </form>
                @else
                    <a href="#" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block"
                        data-bs-toggle="modal" data-bs-target="#loginModal">Login
                        <i class="bi bi-arrow-right"></i></a>
                @endif
            </div>
        </div>
    </nav>
</div>
