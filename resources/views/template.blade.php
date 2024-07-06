<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="icon" href="{{ asset('image/icon-1.png') }}" type="image/x-icon">
    @include('layouts.link')
</head>
<body id="page-top">
    @include('sweetalert::alert')
    <div id="wrapper">
        @include('layouts.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.topbar')

                <div class="container-fluid">

                    @yield('main-content')

                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>
</html>