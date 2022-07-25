@extends('tamplate.pengurus')
@section('content')
<div class="card">
    <div class="card-header">
        Edit Data Konten
        <form action="{{url('update-konten',$konten->id_konten)}}" method="POST" enctype="multipart/form-data">
    </div>
    <div class="card-body">
         @csrf
        @method("PUT")
        <form class="form-horizontal">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_konten" value="{{$konten->nama_konten}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-9">
                    <textarea rows="5" cols="5" class="form-control" placeholder="Deskripsi" name="deskripsi">{{$konten->deskripsi}}</textarea>
                </div>
            </div>
            <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan </button>
        </form>
        </form>
    </div>
</div>
@endsection