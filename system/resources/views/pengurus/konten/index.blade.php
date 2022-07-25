@extends('tamplate.pengurus')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h1>Data Konten</h1>
        

        <div class="col-md-12 ">
				  <a href="{{url('konten/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
 			  		</div>
        </div>

        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Aksi</th>
                <th class="text-center">Nama Konten</th>
                <th class="text-center">Deskripsi</th>
              </tr>
            </thead>
          

          <tbody>
            <tbody>
            @foreach($list_konten as $konten)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td class="text-center">
                <div class="btn-group">
                  <a href="{{url("konten/$konten->id_konten")}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                  <a href="{{url("konten/$konten->id_konten")}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  

                  @include('admin.utils.delete', ['url' =>url('konten', $konten->id_konten)])
                </div>

                <td class="text-center">{{$konten->nama_konten}}</td>
                <td class="text-center">{{$konten->deskripsi}}</td>

                <!-- <td class="text-center"><img src="{{ url("public/$konten->gambar")}}" class="img-fluid" width="30%"></td> -->

            </tr>
          @endforeach
            </td>
          </tbody>
        </table>
        </div>

      </div>
    </div>
  </div>
</tbody>
</section>
@endsection