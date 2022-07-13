<!DOCTYPE html>

    <head>
      <!-- Favicons -->
      <link href="{{ asset('logo BBR.png') }}" rel="icon">
      <link href="{{ asset('logo BBR.png') }}" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

      <!-- Template Main CSS Files -->
      <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


      <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


    </head>
    <body>
      <!-- ======= Header ======= -->
      @include('partials.navbar')
      <!-- End Header -->

      <main id="main">
        @yield('main-container')
      </main><!-- End #main -->


      {{-- footer --}}
      @include('partials.footer')


    </body>
</html>
