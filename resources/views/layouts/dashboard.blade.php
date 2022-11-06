<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>

    <link href="/css/dashboard.css" rel="stylesheet" />
    <link href="/css/bootstrap.min.css" rel="stylesheet">


</head>

<body class="sb-nav-fixed">
    @include('sweetalert::alert')
    @include('components.dashboard-navbar')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('components.dashboard-sidebar')
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="mt-4">
                        @yield('content')
                    </div>
                </div>
            </main>
            @include('components.dashboard-footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    {{-- <script src="/js/core/jquery.3.2.1.min.js"></script>
    <script src="/js/core/popper.min.js"></script>

    <!-- Datatables -->
    <script src="/js/plugin/datatables/datatables.min.js"></script> --}}

    <script src="/js/dashboard.js"></script>
</body>

</html>
