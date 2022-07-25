@extends('tamplate.pengurus')
@section('content')

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">pengurus</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @include('pengurus.utils.notif')
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right m-0 h2 text-muted"></i>
                        <h6 class="text-success text-uppercase">PROFIL</h6>
                        <h3>{{ $profil }}Data</h3>

                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right m-0 h2 text-muted"></i>
                        <h6 class="text-primary text-uppercase">REPTIL</h6>
                        <h3>{{ $reptil }} Data</h3>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right m-0 h2 text-muted"></i>
                        <h6 class="text-primary text-uppercase">AMFIBI</h6>
                        <h3>{{ $amfibi }} Data</h3>

                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right m-0 h2 text-muted"></i>
                        <h6 class="text-pink text-uppercase">TRIP</h6>
                        <h3>{{ $trip }} Data</h3>
                    </div>
                </div>


                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right m-0 h2 text-muted"></i>
                        <h6 class="text-pink text-uppercase">BERITA</h6>
                        <h3>{{ $berita }} Data</h3>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right m-0 h2 text-muted"></i>
                        <h6 class="text-info text-uppercase">E-BOOK</h6>
                        <h3>{{ $ebook }} Data</h3>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right m-0 h2 text-muted"></i>
                        <h6 class="text-danger text-uppercase">Anggota</h6>
                        <h3>{{ $anggota }} Data</h3>

                    </div>
                </div>


            </div>
            <!-- end row -->





        </div> <!-- end container-fluid -->

    </div>
@endsection
