@extends('tamplate.client')
@section('content')
    <section id="portfolio" class="portfolio" style="margin-top: 5%;">
        <div class="container">


            @foreach ($list_trip as $trip)
                <a href="{{ url("client-trip-detail/$trip->id_trip") }}">

                    <div class="card mb-3">
                        <div class="row">

                            <div class="col-md-0"></div>
                            <img style="width: 70%; position: relative; text-align: center"
                                src="{{ url("public/$trip->gambar") }}" class="card-img-top" alt="...">
                            <div class="card-body" style="color: black">

                                <p class="card-text"><small class="text-muted">Upload {{date('d - M - Y'),strtotime( $trip->created_at) }}</small></p>
                                <h2 class="card-title">{{ $trip->judul }}</h2>


                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

    </section>
@endsection
