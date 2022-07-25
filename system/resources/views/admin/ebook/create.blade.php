@extends('tamplate.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item ">Seminar</li>
                                <li class="breadcrumb-item active">Create</li>
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
                                    <h4 class="header-title"> Tambah Data ebook</h4>
                                </div>
                                <a type="button" href="{{url('kegiatan_trip')}}" class="btn btn-dark float-right"><i class="fa fa-arrow-left"></i> kembali
                                </a>
                            </div>
                            <hr>
                            <div class="card-body">
                                <form action="{{ url('ebook-store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="nama"
                                                    name="nama_ebook">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">gambar</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="gambar" class="form-control"
                                                    accept=".png, .jpg, .jpeg">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">File</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="file" class="form-control"
                                                accept="application/pdf">
                                            </div>
                                        </div>

                                        <br>
                                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan
                                        </button>
                                    </form>


                                </form>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </form>
@endsection
