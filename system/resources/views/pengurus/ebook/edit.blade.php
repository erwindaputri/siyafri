@extends('tamplate.pengurus')
@section('content')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pengurus</a></li>
                                <li class="breadcrumb-item ">ebook</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">ebook</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="panel-body">
                            <div class="clearfix">
                                <div class="float-sm-left mt-4 mt-sm-0">
                                    <h4 class="header-title"> Edit Data ebook</h4>
                                </div>
                                <a type="button" href="{{ url('page-ebook') }}" class="btn btn-dark float-right"><i
                                    class="fa fa-arrow-left"></i> kembali
                            </a>
                            </div>
                        <hr>
                        </div>
                        <form action="{{ url('page-update-ebook', $ebook->id_ebook) }}" method="POST"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                @method('PUT')
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Judul"
                                                name="nama_ebook" value="{{ $ebook->nama_ebook }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="gambar" class="form-control"
                                                accept=".png, .jpg, .jpeg">
                                            <img src="{{ url("public/$ebook->gambar") }}" class="rounded float-end"
                                                width="50%" alt="...">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">File</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="file" class="form-control"
                                            accept="application/pdf" value="{{ $ebook->file }}">
                                        </div>
                                    </div>
                                    <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan </button>
                                </form>
                            </div>
                        </form>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endsection
