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
							<li class="breadcrumb-item ">Profil</li>
                            <li class="breadcrumb-item active">Detail</li>
						</ol>
					</div>
					<h4 class="page-title">Profil</h4>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card-box">
					<div class="panel-body">
						<div class="clearfix">

							<div class="float-sm-left mt-4 mt-sm-0">
                                <h4 class="page-title">Detail Profil</h4>
							</div>
							<td>
                                <a type="button" href="{{url('profil')}}" class="btn btn-dark float-right"><i class="fa fa-arrow-left"></i> kembali
                                </a>
						</div>
						<hr>
						<div class="row">
							<div class="col-12">
                                <h4 class="text-uppercase ">{{$profil->nama_file}}</h4>
                                <br>
								<td>
									<embed style="width: 1000px; height: 1000px;" src="{{url("public/$profil->file_data")}}" type="application/pdf"></embed>
								</td>
							</div><!-- end col -->
						</div>
						<!-- end row -->


					</div>

				</div>

			</div>
		</div>

		@endsection
