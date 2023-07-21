<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Travelinaja - </title>

  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/admin/images/logos/favicon.png') }}" />

   <!-- VENDOR CSS -->
   <link href="{{ asset('vendor/sweetalert2/css/sweetalert2.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/admin/libs/datatables/css/datatables.min.css') }}" rel="stylesheet">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/styles.min.css') }}" />

  <!-- VENDOR JS -->
  <script src="{{ asset('vendor/sweetalert2/js/sweetalert2.min.js') }}"></script>

</head>

<body>

    @include('partials.flasher')

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        
        @auth
            @include('partials.admin.sidebar')
        @endauth

        @guest
            @yield('section-auth')
        @endguest

        @auth
        <div class="body-wrapper">
            @include('partials.admin.navbar')

            @yield('section-main')

            @include('partials.admin.footer')
        </div>
        @endauth
    </div>

    <script src="{{ asset('assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    @auth
    <script src="{{ asset('assets/admin/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/datatables.js') }}"></script>
    <script src="{{ asset('assets/admin/js/preview.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/datatables/js/datatables.min.js') }}"></script>

    @if (request()->is('/'))
        <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
    @endif
    @endauth
</body>
</html>