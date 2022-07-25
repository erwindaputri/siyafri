@extends('tamplate.pengurus')
@section('content')
<div class="content">

	<!-- Start Content-->
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="javascript: void(0);">Pengurus</a></li>
							<li class="breadcrumb-item active">Profil</li>
						</ol>
					</div>
					<h4 class="page-title">Profil</h4>

				</div>
			</div>
		</div>
		@include('pengurus.utils.notif')
		<div class="row">
			<div class="col-12">
				<div class="card-box">
					<h4 class="header-title">Data Profil</h4>
					<hr>
					<p class="sub-header">
						<a href="{{url('create-page-profil')}}" class="btn btn-dark float-center"><i class="fa fa-plus"></i> Tambah Data</a>
					</p>

					<table id="key-table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Nama</th>
								<th>Aksi</th>

							</tr>
						</thead>


						<tbody>
							@foreach($list_profil as $profil)
							<tr>
								<td class="text-center">{{$loop->iteration}}</td>

								<td class="text-center">{{$profil->nama_file}}</td>

								<td class="text-center">
									<div class="btn-group">
										<a href="{{url("$profil->id_profil/page-profil")}}" title="lihat" class="btn btn-dark"><i class="fa fa-info"></i></a>

										<a href="{{url("edit/$profil->id_profil/page-profil")}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>

										@include('pengurus.utils.delete', ['url' =>url('page-delete-profil', $profil->id_profil)])
									</div>
								</td>


							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		@endsection
