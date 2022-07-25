@php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Yayaysan Amfibi Reptil Indonesia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- App css -->
    <link href="{{url('public/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{url('public/admin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('public/admin')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />


    <!-- Plugins css -->
    <link href="{{url('public/admin')}}/assets/libs/dropify/dropify.min.css" rel="stylesheet" type="text/css" />

    <!-- Magnific -->
    <link rel="stylesheet" href="{{url('public/admin')}}/assets/libs/magnific-popup/magnific-popup.css" />

    <!-- Favicons -->
    <link href="{{ url('public') }}/assets/img/logo.png" rel="icon">
    <link href="{{ url('public') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="{{ url('public') }}/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('public') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('public') }}/assets/css/style.css" rel="stylesheet">


</head>

<body>

    @include('client.section.header')


    <main id="main">
        @yield('content')
    </main>

    @include('client.section.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('public') }}/assets/vendor/purecounter/purecounter.js"></script>
    <script src="{{ url('public') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('public') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('public') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('public') }}/assets/js/main.js"></script>
    <!-- Datatables init -->
    <script src="{{url('public/admin')}}/assets/js/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="{{url('public/admin')}}/assets/js/app.min.js"></script>
    <!-- Vendor js -->
    <script src="{{url('public/admin')}}/assets/js/vendor.min.js"></script>

    <!--Morris Chart-->
    <script src="{{url('public/admin')}}/assets/libs/morris-js/morris.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init js-->
    <script src="{{url('public/admin')}}/assets/js/pages/dashboard.init.js"></script>

</body>

</html>
