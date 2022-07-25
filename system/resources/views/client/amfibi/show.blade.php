@extends('tamplate.client')
@section('content')
        <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail amfibi </h2>
                <ol>
                    <li><a href="{{ url('client-amfibi') }}">Amfibi</a></li>
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
                                <img src="{{ url("public/$amfibi->gambar1") }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img  src="{{ url("public/$amfibi->gambar2") }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img class="height: 200px;" src="{{ url("public/$amfibi->gambar3") }}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-info">
                        <h3>{{ $amfibi->nama }}</h3>
                        <ul>
                            <li><strong>Nama Latin</strong>: {{ $amfibi->nama_latin }}</li>
                            <li><strong>Family</strong>: {{ $amfibi->family }}</li>
                            <li><strong>Persebaran</strong>: {{ $amfibi->persebaran }},
                                {{ $amfibi->kabupaten_kecamatan }}</li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="row gy-4">

                <div class="col-lg-12">
                    <p>
                        {!! nl2br($amfibi->deskripsi) !!}
                    </p>
                </div>



            </div>

        </div>
    </section>
@endsection
