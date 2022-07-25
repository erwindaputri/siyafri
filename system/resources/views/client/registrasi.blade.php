<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Registrasi </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('public/admin')}}/assets/images/yafri.png">

        <!-- App css -->
        <link href="{{url('public/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{url('public/admin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/admin')}}/assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    </head>
<body class="authentication-bg">

    <div class="account-pages pt-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="account-card-box">
                        <div class="card mb-0">
                            <div class="card-body p-4">

                                <div class="text-center">
                                    <div class="my-3">
                                        <a href="index.html">
                                            <span><img src="{{url('public/admin')}}/assets/images/yafri.png" alt="" height="85"></span>
                                        </a>
                                    </div>
                                    <h5 class="text-muted text-uppercase py-3 font-16">Register Anggota</h5>
                                </div>

                                <form action="{{ url('registrasi-anggota') }}" method="post" class="mt-2" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input class="form-control" type="text" required="" placeholder="Nomor Hp Anda" name="no_hp_anggota">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="email" required="" placeholder="Masukan Email Anda" name="email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="text" required="" placeholder="Masukan Username Anda" name="username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="password" required="" placeholder="Password" name="konfirmasi_password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="file" required="" name="foto" accept=".jpg, .png, .jpeg">
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Join Now </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="{{url('public/admin')}}/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{url('public/admin')}}/assets/js/app.min.js"></script>

</body>
</html>
