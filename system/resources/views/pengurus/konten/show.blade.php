@extends('tamplate.pengurus')
@section('content')

<div class="card">
    <div class="card-header">
       <h5> Detail Data Konten</h5>
</div>
   
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
<table class="table table-striped">
<tr>
        <td>Nama</td>
        <td>: {{ucwords($konten->nama_konten)}}</td>
    </tr>

    <tr>
        <td>Deskripsi</td>
        <td>: {{ucwords($konten->deskripsi)}}</td>
    </tr>
    <tr>
        <td></td>
        <td> <button class="btn btn-info" onclick="history.back()"><i class="fa fa-arrow-left"></i> Back</button></td>
    </tr>
</table>
            </div>
            
        </div>
    </div>
</div>
@endsection