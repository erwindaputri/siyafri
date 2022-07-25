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
                            <li class="breadcrumb-item ">berita</li>
                                <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div>
                    <h4 class="page-title">berita</h4>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title"> Detail Data berita</h4>


                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tr>
                                        <td>Judul</td>
                                        <td>: {{ucwords($berita->judul)}}</td>
                                    </tr>

                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:{!! nl2br($berita->deskripsi) !!}
                                        </td>
                                    </tr>

                                    <tr>

                                </table>
                            </div>
                            <div class="col-md-3 col-xl-4 creative personal photography">
                                <div class="gallery-box">
                                    <a href="{{ url("public/$berita->gambar")}}" class="image-popup" title="Screenshot-2" width="50%">
                                        <img src="{{ url("public/$berita->gambar")}}" class="thumb-img img-fluid" alt="work-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <td></td>
                            <td> <button class="btn btn-dark float-left" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button></td>
                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
