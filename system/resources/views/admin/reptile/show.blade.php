@extends('tamplate.admin')
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Reptile</li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Profil</h4>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <!-- <div class="panel-heading">
                                            <h4>Invoice</h4>
                                        </div> -->
                        <div class="panel-body">
                            <div class="clearfix">

                                <div class="float-sm-left mt-4 mt-sm-0">
                                    <h4 class="text-uppercase "> Detail Data Reptile</h4>
                                </div>
                                <a type="button" href="{{url('reptile')}}" class="btn btn-dark float-right"><i class="fa fa-arrow-left"></i> kembali
                                </a>
                            </div>
                            <hr>
                            <meta name="viewport" content="width=device-width, initial-scale=1">

                            <style>
                                /*****************globals*************/

                                img {
                                    max-width: 100%;
                                }

                                .preview {
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-orient: vertical;
                                    -webkit-box-direction: normal;
                                    -webkit-flex-direction: column;
                                    -ms-flex-direction: column;
                                    flex-direction: column;
                                }

                                @media screen and (max-width: 996px) {
                                    .preview {
                                        margin-bottom: 20px;
                                    }
                                }

                                .preview-pic {
                                    -webkit-box-flex: 1;
                                    -webkit-flex-grow: 1;
                                    -ms-flex-positive: 1;
                                    flex-grow: 1;
                                }

                                .preview-thumbnail.nav-tabs {
                                    border: none;
                                    margin-top: 15px;
                                }

                                .preview-thumbnail.nav-tabs li {
                                    width: 18%;
                                    margin-right: 2.5%;
                                }

                                .preview-thumbnail.nav-tabs li img {
                                    max-width: 100%;
                                    display: block;
                                }

                                .preview-thumbnail.nav-tabs li a {
                                    padding: 0;
                                    margin: 0;
                                }

                                .preview-thumbnail.nav-tabs li:last-of-type {
                                    margin-right: 0;
                                }

                                .tab-content {
                                    overflow: hidden;
                                }

                                .tab-content img {
                                    width: 100%;
                                    -webkit-animation-name: opacity;
                                    animation-name: opacity;
                                    -webkit-animation-duration: .3s;
                                    animation-duration: .3s;
                                }

                                .card {
                                    margin-top: 50px;
                                    background: #fff;
                                    padding: 3em;
                                    line-height: 1.5em;
                                }

                                @media screen and (min-width: 997px) {
                                    .wrapper {
                                        display: -webkit-box;
                                        display: -webkit-flex;
                                        display: -ms-flexbox;
                                        display: flex;
                                    }
                                }

                                .details {
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-orient: vertical;
                                    -webkit-box-direction: normal;
                                    -webkit-flex-direction: column;
                                    -ms-flex-direction: column;
                                    flex-direction: column;
                                }

                                .colors {
                                    -webkit-box-flex: 1;
                                    -webkit-flex-grow: 1;
                                    -ms-flex-positive: 1;
                                    flex-grow: 1;
                                }

                                .product-title,
                                .price,
                                .sizes,
                                .colors {
                                    text-transform: UPPERCASE;
                                    font-weight: bold;
                                }

                                .checked,
                                .price span {
                                    color: #ff9f1a;
                                }

                                .product-title,
                                .rating,
                                .product-description,
                                .price,
                                .vote,
                                .sizes {
                                    margin-bottom: 15px;
                                }

                                .product-title {
                                    margin-top: 0;
                                }

                                .size {
                                    margin-right: 10px;
                                }

                                .size:first-of-type {
                                    margin-left: 40px;
                                }

                                .color {
                                    display: inline-block;
                                    vertical-align: middle;
                                    margin-right: 10px;
                                    height: 2em;
                                    width: 2em;
                                    border-radius: 2px;
                                }

                                .color:first-of-type {
                                    margin-left: 20px;
                                }

                                .add-to-cart,
                                .like {
                                    background: #ff9f1a;
                                    padding: 1.2em 1.5em;
                                    border: none;
                                    text-transform: UPPERCASE;
                                    font-weight: bold;
                                    color: #fff;
                                    -webkit-transition: background .3s ease;
                                    transition: background .3s ease;
                                }

                                .add-to-cart:hover,
                                .like:hover {
                                    background: #b36800;
                                    color: #fff;
                                }

                                .not-available {
                                    text-align: center;
                                    line-height: 2em;
                                }

                                .not-available:before {
                                    font-family: fontawesome;
                                    content: "\f00d";
                                    color: #fff;
                                }

                                .orange {
                                    background: #ff9f1a;
                                }

                                .green {
                                    background: #85ad00;
                                }

                                .blue {
                                    background: #0076ad;
                                }

                                .tooltip-inner {
                                    padding: 1.3em;
                                }

                                @-webkit-keyframes opacity {
                                    0% {
                                        opacity: 0;
                                        -webkit-transform: scale(3);
                                        transform: scale(3);
                                    }

                                    100% {
                                        opacity: 1;
                                        -webkit-transform: scale(1);
                                        transform: scale(1);
                                    }
                                }

                                @keyframes opacity {
                                    0% {
                                        opacity: 0;
                                        -webkit-transform: scale(3);
                                        transform: scale(3);
                                    }

                                    100% {
                                        opacity: 1;
                                        -webkit-transform: scale(1);
                                        transform: scale(1);
                                    }
                                }

                            </style>




                            <div class="wrapper row">
                                <div class="preview col-md-6">

                                    <div class="preview-pic tab-content">
                                        @if ($reptil->gambar1)
                                            <div class="tab-pane active" id="pic-1"><img
                                                    src="{{ url("public/$reptil->gambar1") }}" /></div>
                                        @else
                                        @endif

                                        @if ($reptil->gambar2)
                                            <div class="tab-pane" id="pic-2"><img
                                                    src="{{ url("public/$reptil->gambar2") }}" /></div>
                                        @else
                                        @endif

                                        @if ($reptil->gambar3)
                                            <div class="tab-pane" id="pic-3"><img
                                                    src="{{ url("public/$reptil->gambar3") }}" /></div>
                                        @else
                                        @endif
                                    </div>

                                    <ul class="preview-thumbnail nav nav-tabs">
                                        @if ($reptil->gambar1)
                                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                                        src="{{ url("public/$reptil->gambar1") }}" /></a></li>
                                        @else
                                        @endif
                                        @if ($reptil->gambar2)
                                            <li class="active"><a data-target="#pic-2" data-toggle="tab"><img
                                                        src="{{ url("public/$reptil->gambar2") }}" /></a></li>
                                        @else
                                        @endif
                                        @if ($reptil->gambar3)
                                            <li class="active"><a data-target="#pic-3" data-toggle="tab"><img
                                                        src="{{ url("public/$reptil->gambar3") }}" /></a></li>
                                        @else
                                        @endif


                                    </ul>

                                </div>
                                <hr>
                                <div class="details col-md-6">
                                    <tr>
                                        <br>
                                        <td>
                                            <h2 class="text-uppercase ">{{ $reptil->nama }}</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <h5 class="text-uppercase ">Nama latin : <em>{{ ucwords($reptil->nama_latin) }}</em>
                                        </h5>
                                    </tr>

                                    <tr>
                                        <h5 class="text-uppercase ">Family : {{ ucwords($reptil->family) }}</h5>
                                    </tr>
                                    <tr>
                                        <h5 class="text-uppercase ">Status berbisa : {{ ucwords($reptil->status_berbisa) }}
                                        </h5>
                                    </tr>
                                    <tr>
                                        <h5 class="text-uppercase ">Persebaran : {{ ucwords($reptil->persebaran) }}</h5>
                                    </tr>

                                </div>
                            </div>
                            <br>
                            <p class="name-description">
                            <h5 class="text-uppercase "> Deskripsi</h5>
                            {!! nl2br($reptil->deskripsi) !!}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
