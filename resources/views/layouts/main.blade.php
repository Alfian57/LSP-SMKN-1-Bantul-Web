<!DOCTYPE html>
<html lang="en">

<head>
    <title>LSP SMK Negeri 1 Bantul</title>

    <!-- Favicon -->
    {{-- <link href="/img/delete.png" rel="icon"> --}}

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- My Css -->
    <link href="/css/beranda.css" rel="stylesheet">
</head>

<body>
    @include('sweetalert::alert')
    @include('components.login-modal')
    @include('components.beranda-topbar')
    @include('components.beranda-navbar')

    <div class="container-fluid py-6 px-5">
        @yield('content')
    </div>

    @include('components.beranda-footer')

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</body>

</html>
