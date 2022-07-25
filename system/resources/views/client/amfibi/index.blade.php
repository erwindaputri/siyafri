@extends('tamplate.client')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid mt-4 pt-4">
            <div class="section-title mt-4 p-4">
                <h2>Amfibi</h2>
                <p>Hewan amfibi adalah hewan yang memiliki kelembaban kulit yang tinggi, tidak tertutupi oleh rambut dan mampu hidup di air ataupun di darat.

                    Amfibi berasal dari bahasa Yunani yaitu Amphi yang berarti dua dan Bios yang berarti hidup. Oleh sebab itu hewan amfibi diartikan sebagai hewan yang hidupnya didua tempat yaitu di darat dan air.
                    Hewan amfibi ada di seluruh dunia. Beberapa hewan amfibi lebih banyak hidupnya di air, dan juga ditemukan di daerah padang pasir Arktik. Hewan amfibi tersebar karena dipengaruhi oleh faktor kelembapan tempat untuk bisa bereproduksi.</p>

                    <hr>
            </div>




            <!-- end row -->
            <div class="row mt-4 mx-4">
                @foreach ($amfibis as $amfibi)
                    <div class="col-md-4 col-lg-3 rounded-5">
                        <div class="card mb-2 shadow-sm rounded object-cover card-img-to">
                            <a href="{{ url("amfibi-detail/$amfibi->id_amfibi") }}">
                                <img src="{{ url("public/$amfibi->gambar1") }}" height="400px" class="img-fluid rounded-top rounded-5">
                            <div class="card-body ">
                                <div class="card-body" style="color: black">
                                        <h5 class="text-center"><strong>{{ $amfibi->nama }} </strong></h5>
                                        {{-- <h6 class="text-center"><em>{{ $amfibi->nama_latin }}</em></h6> --}}
                                        <h6 class="text-center  bg-warning text-white py-2 px-2 rounded"><em>{{ $amfibi->nama_latin }}</em></h6>

                                    </div>

                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- end row -->



        </div>
        <div class="row">
        <div class="col">
          {{ $amfibis->links() }}
        </div>
      </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
    </div> <!-- end content -->
@endsection
