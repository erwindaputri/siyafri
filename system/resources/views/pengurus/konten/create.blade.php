@extends('tamplate.pengurus')
@section('content')

<div class="card">
    <h5 class="card-header">Tambah Data</h5>
    <div class="card-body">
        <form action="{{url('konten-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <form class="form-horizontal">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_konten" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea rows="5" cols="5" class="form-control" placeholder="Deskripsi" name="deskripsi"></textarea>
                    </div>
                </div>
                <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan </button>
            </form>
        </form>

        <a href="{{url('konten')}}" class="btn btn-dark float-left"><i class="fas fa-arrow-left"></i></i> Kembali</a>
    </div>
</div>



@endsection