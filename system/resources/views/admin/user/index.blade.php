@extends('tamplate.admin')
@section('content')
    @include('admin.section.profil')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Super Admin</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Super Admin</h4>
                    </div>
                </div>
            </div>
            @include('admin.utils.notif')
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title"> Data Super Admin</h4>
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
                                    <th>Username</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_user as $user)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $user->username }}</td>
                                        <td class="text-center">
                                            <img src="{{ url("public/$user->foto") }}" width="25%" alt="">
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a data-toggle="modal" data-target="#modal-lg-edit{{ $user->id }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>


                                                @include('admin.utils.delete', [
                                                    'url' => url('user', $user->id),
                                                ])
                                            </div>
                                        </td>
                                        <div class="modal fade" id="modal-lg-edit{{ $user->id }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Data Admin</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ url('update-user', $user->id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        <div class="card-body">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">Username</label>
                                                                        <input type="text" class="form-control"
                                                                            name="username" placeholder="username"
                                                                            required=""
                                                                            value="{{ $user->username }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label">Foto</label>
                                                                        <img class="img-preview img-fluid">
                                                                        <input type="file" name="foto"
                                                                            class="form-control"
                                                                            accept=".png, .jpg, .jpeg">
                                                                        <img src="{{ url("public/$user->foto") }}"
                                                                            class="rounded float-end" width="20%"
                                                                            alt="...">
                                                                    </div>
                                                                </div>




                                                                <div class="form-group">
                                                                    <label class="control-label">Password</label>
                                                                    <input type="password" class="form-control"
                                                                        name="password" required="">
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
                    <h4 class="modal-title">Tambah Data Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('user-store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" name="username" placeholder=""
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
