<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Travelinaja - </title>

    <!-- VENDOR CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/css/unpkg.com_swiper@7.4.1_swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/templatemo-woox-travel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/animate.css') }}">
</head>

<body>
    @include('partials.client.navbar')

    @yield('section')

    @include('partials.client.footer')

    <!-- VENDOR JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- MAIN JS -->
    <script src="{{ asset('assets/client/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/client/js/wow.js') }}"></script>
    <script src="{{ asset('assets/client/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/client/js/popup.js') }}"></script>
    <script src="{{ asset('assets/client/js/custom.js') }}"></script>
</body>
</html>