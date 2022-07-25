<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>siyafri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('public/admin')}}/assets/images/yafri.png">


    <!-- Plugins css -->
    <link href="{{url('public/admin')}}/assets/libs/dropify/dropify.min.css" rel="stylesheet" type="text/css" />

    <!-- Magnific -->
    <link rel="stylesheet" href="{{url('public/admin')}}/assets/libs/magnific-popup/magnific-popup.css" />

    <!-- App css -->
    <link href="{{url('public/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{url('public/admin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('public/admin')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

    <!-- Table datatable css -->
    <link href="{{url('public/admin')}}/assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="{{url('public/admin')}}/assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('public/admin')}}/assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('public/admin')}}/assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

    @include('admin.section.profil')
        @include('admin.layout.admin.header')


        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layout.admin.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            @yield('content')
            <!-- end content -->



            @include('admin.layout.admin.footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->





    <!-- Vendor js -->
    <script src="{{url('public/admin')}}/assets/js/vendor.min.js"></script>

    <!--Morris Chart-->
    <script src="{{url('public/admin')}}/assets/libs/morris-js/morris.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init js-->
    <script src="{{url('public/admin')}}/assets/js/pages/dashboard.init.js"></script>

    <!-- Datatable plugin js -->
    <script src="{{url('public/admin')}}/assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="{{url('public/admin')}}/assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/datatables/responsive.bootstrap4.min.js"></script>

    <script src="{{url('public/admin')}}/assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/datatables/buttons.bootstrap4.min.js"></script>

    <script src="{{url('public/admin')}}/assets/libs/jszip/jszip.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/pdfmake/pdfmake.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/pdfmake/vfs_fonts.js"></script>

    <script src="{{url('public/admin')}}/assets/libs/datatables/buttons.html5.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/datatables/buttons.print.min.js"></script>

    <script src="{{url('public/admin')}}/assets/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/datatables/dataTables.select.min.js"></script>

    <!-- Datatables init -->
    <script src="{{url('public/admin')}}/assets/js/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="{{url('public/admin')}}/assets/js/app.min.js"></script>

    <!-- Magnific -->
    <script src="{{url('public/admin')}}/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Gallery Init-->
    <script src="{{url('public/admin')}}/assets/js/pages/gallery.init.js"></script>


</body>

</html>
