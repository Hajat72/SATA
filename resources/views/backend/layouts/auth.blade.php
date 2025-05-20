<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/images/logos/favicon.png') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('backend/css/styles.css') }}" />

    <title>Modernize Bootstrap Admin</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('backend/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   
    
</head>

<body>

    @include('backend.components.toast')
    @include('backend.components.pre_loader')
    <div id="main-wrapper">
        <aside class="left-sidebar with-vertical">
            <div>
                @include('backend.components.sidebar')
                @include('backend.components.fixed_profile')
            </div>
        </aside>

        <div class="page-wrapper">
        @include('backend.components.header')

        <div class="body-wrapper">

    @yield('dash')

        </div>
        </div>

    </div>


    <div class="dark-transparent sidebartoggler"></div>
    <script src="{{ asset('backend/js/vendor.min.js') }}"></script>
    <!-- Import Js Files -->
    <script src="{{ asset('backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('backend/js/theme/theme.js') }}"></script>
    <script src="{{ asset('backend/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('backend/js/theme/sidebarmenu.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{ asset('backend/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('backend/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/js/dashboards/dashboard.js') }}"></script>
</body>

</html>