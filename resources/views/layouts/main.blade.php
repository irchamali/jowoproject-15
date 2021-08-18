<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title; }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="frontend/img/favicon.png" rel="icon">
    <link href="frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="frontend/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    @include('partials.navbar')
    <!-- End Header -->

    <!-- ======= Home Section ======= -->
    @yield('home')
    <!-- End #home -->

    <!-- ======= Footer ======= -->
    @include('partials.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="frontend/vendor/aos/aos.js"></script>
    <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="frontend/vendor/php-email-form/validate.js"></script>
    <script src="frontend/vendor/purecounter/purecounter.js"></script>
    <script src="frontend/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="frontend/js/main.js"></script>

</body>

</html>
