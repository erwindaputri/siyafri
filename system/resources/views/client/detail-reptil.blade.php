@extends('tamplate.client')
@section('content')


    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail reptile </h2>
                <ol>
                    <li><a href="{{ url('client-reptil') }}">Reptile</a></li>
                    <li>Detail reptile</li>
                </ol>
            </div>

        </div>
    </section>
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ url("public/$reptil->gambar1") }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ url("public/$reptil->gambar2") }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ url("public/$reptil->gambar3") }}" alt="">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-info">
                        <h3>{{ $reptil->nama }}</h3>
                        <ul>
                            <li><strong>Nama Latin</strong>: {{ $reptil->nama_latin }}</li>
                            <li><strong>Family</strong>: {{ $reptil->family }}</li>
                            <li><strong>Status Berbisa</strong>: {{ $reptil->status_berbisa }}</li>
                            <li><strong>Persebaran</strong>: {{ $reptil->persebaran }}
                                {{ $reptil->kabupaten_kecamatan }}</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row gy-4">

                <div class="col-lg-12">
                    <p>
                        {!! nl2br($reptil->deskripsi) !!}
                    </p>
                </div>
        </div>
    </section>
@endsection
