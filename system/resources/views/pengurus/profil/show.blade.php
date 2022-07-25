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
								<h4 class="text-uppercase ">{{$profil->nama_file}}</h4>
                            </div>
                                <td> <button class="btn btn-dark float-right" onclick="history.back()"><i class="fa fa-arrow-left"></i> kembali</button></td>
							</div>
						<hr>
						<div class="row">
							<div class="col-12">
								<td>
									<embed style="width: 1000px; height: 1000px;"
                                    src="{{url("public/$profil->file_data")}}" type="application/pdf">
								</td>
							</div><!-- end col -->
						</div>
						<!-- end row -->


					</div>

				</div>

			</div>
		</div>

		@endsection
