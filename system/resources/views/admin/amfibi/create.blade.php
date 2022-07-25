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
                                <li class="breadcrumb-item ">Amfibi</li>
                                <li class="breadcrumb-item active">Create</li>
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
                                <a type="button" href="{{ url('amfibi') }}" class="btn btn-dark float-right"><i
                                        class="fa fa-arrow-left"></i> kembali
                                </a>
                            </div>
                            <hr>
                            <div class="card-body">
                                <form action="{{ url('amfibi-store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Nama" class="form-control"
                                                    name="nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Latin</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Nama Latin" class="form-control"
                                                    name="nama_latin">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Family</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Family" class="form-control"
                                                    name="family">
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
                                                <input type="text" placeholder="persebaran"
                                                    name="persebaran" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar 1</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="gambar1" class="form-control"
                                                    accept=".png, .jpg, .jpeg">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar 2</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="gambar2" class="form-control"
                                                    accept=".png, .jpg, .jpeg">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar 3</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="gambar3" class="form-control"
                                                    accept=".png, .jpg, .jpeg">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-9">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Deskripsi" name="deskripsi"></textarea>
                                            </div>
                                        </div>
                                        <br><br>
                                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan
                                        </button>
                                    </form>
                                </form>
                            </div>
                            <tr>
                                <td></td>

                            </tr>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
