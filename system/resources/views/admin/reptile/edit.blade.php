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
                                <li class="breadcrumb-item ">Reptil</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Reptile</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="panel-body">
                            <div class="clearfix">
                                <div class="float-sm-left mt-4 mt-sm-0">
                                    <h4 class="header-title"> Edit Data Reptil</h4>
                                </div>
                                <a type="button" href="{{url('reptile')}}" class="btn btn-dark float-right"><i class="fa fa-arrow-left"></i> kembali
                                </a>
                            </div>
                            <hr>
                            <form action="{{ url('update-reptile', $reptil->id_reptil) }}" method="POST"
                                enctype="multipart/form-data">
                                <div class="card-body">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-horizontal">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama"
                                                    value="{{ $reptil->nama }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">nama latin</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama latin"
                                                    value="{{ $reptil->nama_latin }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">family</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="family"
                                                    value="{{ $reptil->family }}">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">status berbisa</label>
                                            <div class="col-md-3">
                                                <select name="status_berbisa" class="form-control"
                                                    value="{{ $reptil->status_berbisa }}"> id="">
                                                    <option value="">Pilih Status Berbisa</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
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
                                                        <option value="{{ $provinsi->name }}">{{ $provinsi->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div> --}}



                                        </div>
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Persebaran</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="persebaran" class="form-control"
                                                        value="{{ $reptil->persebaran }}">
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar 1</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="gambar1" class="form-control"
                                                    accept=".png, .jpg, .jpeg">
                                                <img src="{{ url("public/$reptil->gambar1") }}" class="rounded float-end"
                                                    width="50%" alt="...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar 2</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="gambar2" class="form-control"
                                                    accept=".png, .jpg, .jpeg">
                                                <img src="{{ url("public/$reptil->gambar2") }}" class="rounded float-end"
                                                    width="50%" alt="...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar 3</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="gamba3r" class="form-control"
                                                    accept=".png, .jpg, .jpeg">
                                                <img src="{{ url("public/$reptil->gambar3") }}" class="rounded float-end"
                                                    width="50%" alt="...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> Deskripsi</label>
                                            <div class="col-sm-9">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Deskripsi" name="deskripsi">{{ $reptil->deskripsi }}</textarea>
                                            </div>
                                        </div>
                                        <br><br>
                                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan
                                        </button>
                                        <br><br>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
