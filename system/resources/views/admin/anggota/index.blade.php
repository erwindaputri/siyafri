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
                                <li class="breadcrumb-item active"> Anggota</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Anggota</h4>
                    </div>
                </div>
            </div>
            @include('admin.utils.notif')
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title"> Data Anggota</h4>
                        <hr>
                        <p class="sub-header">
                            <a data-toggle="modal" data-target="#modal-lg" class="btn btn-dark float-center text-white"><i
                                    class="fa fa-plus"></i> Tambah Data</a>
                        </p>
                        <table id="key-table" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Foto</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($list_anggota as $anggota)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                                @if ($anggota->status == 1)
                                                <form action="{{ url('anggota',$anggota->no_hp_anggota) }}" method="post">
                                                    @csrf
                                                    @method('PUT')

                                                    <input type="text" name="konfirmasi_password" value="{{ $anggota->konfirmasi_password }}" hidden>
                                                    <button class="btn btn-info"><span class="fa fa-check"></span> Konfirmasi Akun</button>

                                                </form>

                                                @endif
                                                <a data-toggle="modal"
                                                    data-target="#modal-lg-edit{{ $anggota->no_hp_anggota }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>


                                                @include('admin.utils.delete', [
                                                    'url' => url('anggota', $anggota->no_hp_anggota),
                                                ])
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $anggota->username }}</td>
                                        <td class="text-center">{{ $anggota->email }}</td>
                                        <td class="text-center">
                                            <img src="{{ url("public/$anggota->foto") }}" width="40%" alt="">
                                        </td>

<!--modal_edit-->

                                        <div class="modal fade" id="modal-lg-edit{{ $anggota->no_hp_anggota }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Data Anggota</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ url('update-anggota', $anggota->no_hp_anggota) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        <div class="card-body">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Username</label>
                                                                        <input type="text" class="form-control"
                                                                            name="username" placeholder="username"
                                                                            required=""
                                                                            value="{{ $anggota->username }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">email</label>
                                                                        <input type="email" class="form-control"
                                                                            name="email" placeholder="" required=""
                                                                            value="{{ $anggota->email }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label">Foto</label>
                                                                        <img class="img-preview img-fluid">
                                                                        <input type="file" name="foto"
                                                                            class="form-control" accept=".png, .jpg, .jpeg">
                                                                        <img src="{{ url("public/$anggota->foto") }}"
                                                                            class="rounded float-end" width="20%"
                                                                            alt="...">
                                                                    </div>





                                                                    <div class="form-group">
                                                                        <label class="control-label">Password</label>
                                                                        <input type="password" class="form-control"
                                                                            name="password" required="">
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-end">

                                                            <button class="btn btn-dark float-left"><i
                                                                    class="fas fa-save"></i> Simpan </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Anggota</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('anggota-store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" name="username" placeholder=""
                                    required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">email</label>
                                <input type="email" class="form-control" name="email" placeholder=""
                                    required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Foto</label>
                                <img class="img-preview img-fluid">

                                <input type="file" name="foto" class="form-control" accept=".png, .jpg, .jpeg"
                                    onchange="previewimage()">

                                <div class="img-holder">
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" class="form-control" name="password" required="">
                            </div>



                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
