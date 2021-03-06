

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login </title>
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
    @include('admin.utils.notif')
      <form action="{{('page-login')}}" method="post">
      @csrf
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
                                        <h5 class="text-muted text-uppercase py-3 font-16">Login Anggota</h5>
                                    </div>

                                    <form action="#" class="mt-2">

                                        <div class="form-group mb-3">
                                            <input class="form-control" name="username" type="text" required="" placeholder="Username">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input class="form-control" name="email" type="email" required="" placeholder="email">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input class="form-control" name="password" type="password" required="" id="password" placeholder="Password">
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <button class="btn btn-success btn-block waves-effect waves-light" name="login" type="submit"> Log In </button>
                                        </div>

                                        <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Lupa Kata Sandi?</a>

                                    </form>


                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50"><strong>SIYAFRI</strong><b>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

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
