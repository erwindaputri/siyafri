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
							<li class="breadcrumb-item active">Amfibi</li>
						</ol>
					</div>
					<h4 class="page-title">Amfibi</h4>

				</div>
			</div>
		</div>
		@include('pengurus.utils.notif')
		<div class="row">
			<div class="col-12">
				<div class="card-box">
					<h4 class="header-title">Data Amfibi</h4>
					<hr>
					<p class="sub-header">
						<a href="{{url('create-page-amfibi')}}" class="btn btn-dark float-center"><i class="fa fa-plus"></i> Tambah Data</a>
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
							@foreach($list_amfibi as $amfibi)
							<tr>
								<td class="text-center">{{$loop->iteration}}</td>

								<td class="text-center">{{$amfibi->nama}}</td>

								<td class="text-center">
									<div class="btn-group">
										<a href="{{url("$amfibi->id_amfibi/page-amfibi")}}" title="lihat" class="btn btn-dark"><i class="fa fa-info"></i></a>

										<a href="{{url("edit/$amfibi->id_amfibi/page-amfibi")}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>

										@include('pengurus.utils.delete', ['url' =>url('page-delete-amfibi', $amfibi->id_amfibi)])
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
