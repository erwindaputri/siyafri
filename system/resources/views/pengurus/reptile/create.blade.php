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
                            <li class="breadcrumb-item ">Reptile</li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Reptil</h4>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="panel-body">
                        <div class="clearfix">
                            <div class="float-sm-left mt-4 mt-sm-0">
                                <h4 class="header-title"> Tambah Data Reptil</h4>
                            </div>
                            <a type="button" href="{{ url('page-reptile') }}" class="btn btn-dark float-right"><i
                                class="fa fa-arrow-left"></i> kembali
                        </a>
                        </div>
                    <hr>
                    <div class="card-body">
                        <form action="{{ url('page-reptile-store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <form class="form-horizontal">
                                <input type="text" name="id_pengurus" value="{{ $pengurus->id_pengurus }}" hidden>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Nama" name="nama"
                                            value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Latin</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Nama Latin"
                                            name="nama latin" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Family</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Family" name="family"
                                            value="">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">status berbisa</label>
                                    <div class="col-md-3">
                                        <select name="status_berbisa" class="form-control" id="">
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
                                                <option value="{{ $provinsi->name }}">{{ $provinsi->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}



                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Persebaran</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="persebaran"
                                            name="persebaran" >
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
                                <br>
                                <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan </button>
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
