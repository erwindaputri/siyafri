@extends('tamplate.client')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid mt-4 pt-4">

            <div class="section-title mt-4 p-4">
                <h2>Reptile</h2>

                <p>Reptil (binatang melata, atau dalam bahasa Latin "reptans" artinya 'melata' atau 'merayap') adalah kelompok hewan vertebrata berdarah dingin dan memiliki sisik yang menutupi tubuhnya. Reptilia adalah tetrapoda (hewan dengan empat tungkai) dan menelurkan telur yang embrionya diselubungi oleh membran amniotik. Sekarang ini mereka menghidupi setiap benua kecuali Antarktika.</p>


                    <hr>
            </div>




            <!-- end row -->
            <div class="row mt-4 mx-4">
                @foreach ($reptiles as $reptile)
                    <div class="col-md-4 col-lg-3 rounded-5">
                        <div class="card mb-2 shadow-sm rounded object-cover card-img-top">
                            <a href="{{ url("reptil-detail/$reptile->id_reptil") }}">
                                <img src="{{ url("public/$reptile->gambar1") }}" height="400px"
                                    class="img-fluid rounded-top rounded-5">
                                <div class="card-body ">
                                    <div class="card-body" style="color: black">
                                        <h5 class="text-center"><strong>{{ $reptile->nama }} </strong></h5>
                                        {{-- <h6 class="text-center"><em>{{ $reptile->nama_latin }}</em></h6> --}}
                                        <h6 class="text-center  bg-warning text-white py-2 px-2 rounded"><em>{{ $reptile->nama_latin }}</em></h6>

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
                {{ $reptiles->links() }}
            </div>
        </div>
    <!-- end row -->
    </div> <!-- end container-fluid -->
    </div> <!-- end content -->
@endsection
