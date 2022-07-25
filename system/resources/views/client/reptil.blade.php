@extends('tamplate.client')
@section('content')

    <section id="portfolio" class="portfolio" style="margin-top: 5%;">
        <div class="container">

            <div class="section-title">
                <h2>Reptil</h2>

            </div>
       

           

            <br><br>
            <br><br>

            <div class="row">
                @foreach ($list_reptil as $reptil)
                    <div class="col-md-3">
                        <a href="{{ url("reptil-detail/$reptil->id_reptil") }}">
                            <td class="text-center">

                                <img src="{{ url("public/$reptil->gambar1") }}" width="300px" class="img-fluid">
                            </td>

                            <div class="card-body" style="color: black">
                                <h5 class="text-center"><strong>{{ $reptil->nama }} </strong></h5>
                                <h6 class="text-center"><em>{{ $reptil->nama_latin }}</em></h6>
                                <br><br>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>


        </div>
        </div>
    </section>

@endsection
