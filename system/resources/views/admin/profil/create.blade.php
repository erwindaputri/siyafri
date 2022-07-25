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
                                <li class="breadcrumb-item ">Profil</li>
                                <li class="breadcrumb-item active">Create</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Profil</h4>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title">Tambah Data Profil</h4>
                        <hr>
                        <div class="card-body">
                            <form action="{{ url('profil-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama File</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama_file" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">File Data</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="file" name="file_data"
                                                value="" accept="application/pdf">
                                        </div>
                                    </div>
                                    <br><br>
                                    <tr>
                                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan
                                        </button>
                                </form>
                            </form>
                            <a type="button" href="{{url('profil')}}" class="btn btn-dark float-left"><i class="fa fa-arrow-left"></i> kembali
                            </a>
                            </tr>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
