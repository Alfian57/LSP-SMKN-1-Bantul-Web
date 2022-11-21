<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Manu Utama</div>
            <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Permohonan Kompetensi</div>
            <a class="nav-link" href="/mata-pelajaran">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Mata Pelajaran
            </a>
            <a class="nav-link" href="/jenis-standar">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Jenis Standar
            </a>
            <a class="nav-link" href="/unit-kompetensi">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Unit Kompetensi
            </a>
            <a class="nav-link" href="/peserta">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Peserta
            </a>
            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Layouts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                    </nav>
                </div> -->
            {{-- <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Charts
            </a>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables
            </a> --}}
            <div class="sb-sidenav-menu-heading">Lain lain</div>
            <a class="nav-link" href="/administrator">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Administrator
            </a>
            <a class="nav-link" href="/siswa">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Siswa
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{ Auth::user()->nama }}
    </div>
</nav>
