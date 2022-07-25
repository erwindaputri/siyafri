@extends('tamplate.pengurus')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pengurus</a></li>
                                <li class="breadcrumb-item ">Amfibi</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Amfibi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="panel-body">
                            <div class="clearfix">
                                <div class="float-sm-left mt-4 mt-sm-0">
                                    <h4 class="header-title"> Detail Data Amfibi</h4>
                                </div>
                                <a type="button" href="{{ url('page-amfibi') }}" class="btn btn-dark float-right"><i
                                    class="fa fa-arrow-left"></i> kembali
                            </a>
                            </div>
                            <hr>
                            <form action="{{ url('page-update-amfibi', $amfibi->id_amfibi) }}" method="POST"
                                enctype="multipart/form-data">
                                <div class="card-body">
                                    @csrf
                                    @method('PUT')
                                    <form class="form-horizontal">
                                        <input type="text" name="id_pengurus" value="{{ $pengurus->id_pengurus }}" hidden>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama"
                                                    value="{{ $amfibi->nama }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Latin</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama latin"
                                                    value="{{ $amfibi->nama_latin }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Family</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="family"
                                                    value="{{ $amfibi->family }}">
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Persebaran</label>
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Provinsi</label>
                                                <select name="persebaran" id="" class="form-control"
                                                    onchange="gantiProvinsi(this.value)">
                                                    <option value="">Pilih Provinsi</option>
                                                    @foreach ($list_provinsi as $provinsi)
                                                        <option value="{{ $provinsi->name }}">{{ $provinsi->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Persebaran</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="persebaran" class="form-control"
                                                    value="{{ $amfibi->persebaran }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar 1</label>
                                            <div class="col-sm-9">

                                                <input type="file" name="gambar1" class="dropify"
                                                    accept=".png, .jpg, .jpeg">
                                                <img src="{{ url("public/$amfibi->gambar1") }}" class="rounded float-end"
                                                    width="20%" alt="...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar 2</label>
                                            <div class="col-sm-9">

                                                <input type="file" name="gambar2" class="dropify"
                                                    accept=".png, .jpg, .jpeg">
                                                <img src="{{ url("public/$amfibi->gambar2") }}" class="rounded float-end"
                                                    width="20%" alt="...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar 3</label>
                                            <div class="col-sm-9">

                                                <input type="file" name="gambar3" class="dropify"
                                                    accept=".png, .jpg, .jpeg">
                                                <img src="{{ url("public/$amfibi->gambar3") }}" class="rounded float-end"
                                                    width="20%" alt="...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-9">
                                                <textarea rows="5" cols="5" type="text" class="form-control" placeholder="Deskripsi"
                                                    name="deskripsi">{{ $amfibi->deskripsi }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan
                                        </button>

                                    </form>
                            </form>

                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

