@extends('tamplate.client')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail amfibi </h2>
                <ol>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>Detail amfibi</li>
                </ol>
            </div>

        </div>
    </section>
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row my-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-top ">

                            <div class="swiper-slide ">
                                <img src="{{ url("public/$reptile->gambar1") class="align-items-top"}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img  src="{{ url("public/$reptile->gambar2") }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img class="height: 200px;" src="{{ url("public/$reptile->gambar3") }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-info">
                        <h3>{{ $reptile->nama }}</h3>
                        <ul>
                            <li><strong>Nama Latin</strong>: {{ $reptile->nama_latin }}</li>
                            <li><strong>Family</strong>: {{ $reptile->family }}</li>
                            <li><strong>Persebaran</strong>: {{ $reptile->persebaran }},
                                {{ $reptile->kabupaten_kecamatan }}</li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="row gy-4">

                <div class="col-lg-12">
                    <p>
                        {!! nl2br($reptile->deskripsi) !!}
                    </p>
                </div>



            </div>

        </div>
    </section>
@endsection
