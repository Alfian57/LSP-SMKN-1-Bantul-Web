<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LSP SMK Negeri 1 Bantul</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">
                        Login
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" class="d-flex">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control form-control-sm" name="email" type="email"
                                placeholder="Masukan Email Disini">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control form-control-sm" name="password" type="password"
                                placeholder="Masukan Password Disini">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btn-sm">Login</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Alamat Kami</h6>
                        <span>Jl. Parangtritis No.KM.11, Dukuh, Sabdodadi, Kec. Bantul, Kabupaten Bantul, Daerah
                            Istimewa Yogyakarta 55715</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Email</h6>
                        <span>smeanbtl@yahoo.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Telepon</h6>
                        <span>0274-367156</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
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
                    <a href="#" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block"
                        data-bs-toggle="modal" data-bs-target="#loginModal">Login
                        <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        @yield('content')
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 display-0 text-uppercase text-white"><img src="/img/logo.png" alt="Logo"
                            class="img-fluid me-2 logo">LSP</h1>
                </a>
                <p>Sekolah Menengah Kejuruan Negeri 1 Bantul adalah sekolah menengah kejuruan yang berlokasi di
                    Kabupaten Bantul, Daerah Istimewa Yogyakarta. Sekolah ini resmi didirikan pada 4 Juni 1968 dan
                    beroperasi di bawah naungan Dinas Pendidikan Menengah dan Nonformal Kabupaten Bantul.</p>
                <p><i class="fa fa-map-marker-alt me-2"></i>Jl. Parangtritis No.KM.11, Dukuh, Sabdodadi, Kec. Bantul,
                    Kabupaten Bantul, Daerah Istimewa Yogyakarta 55715</p>
                <p><i class="fa fa-phone-alt me-2"></i>0274-367156</p>
                <p><i class="fa fa-envelope me-2"></i>smeanbtl@yahoo.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-white text-uppercase mb-4">Link Terkait</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i
                                    class="fa fa-angle-right me-2"></i>Beranda</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Uji
                                Kompetensi</a>
                            <a class="text-white-50 mb-2" href="#"><i
                                    class="fa fa-angle-right me-2"></i>Sertifikasi</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Kontak</a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h4 class="text-white text-uppercase mb-4">Notifikasi Berita</h4>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-light" style="padding: 20px 30px;"
                                    placeholder="Masukan Alamat Email"><button
                                    class="btn btn-primary px-4">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">LSP SMK Negeri 1 Bantul</a>. All
                    Rights Reserved.</p>
            </div>
            <div class="py-4 px-5 bg-primary footer-shape position-relative text-center text-md-end">
                <p class="mb-0">Designed by <a class="text-dark" href="#">Alfian Gading</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>
