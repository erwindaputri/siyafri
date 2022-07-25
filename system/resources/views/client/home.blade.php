@extends('tamplate.client')
@section('content')
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(public/assets/img/slide/2.jpeg);">
                        <div class="carousel-container">
                            <div class="carousel-content">

                                <div class="section-title mt-4 p-4">
                                    <h2>Selamat Datang di
                                        Website Yayasan Amfibi Reptile Indonesia</h2>
                                </div>
                                <p style="font-size:20px">Yayasan Amfibi
                                    Reptil Indonesia merupakan wadah pemersatu dunia konservasi yang berfokus pada satwa
                                    amfibi dan reptil...</p>



                                <p class="animate_animated animate_fadeInUp" style="font-size:30px"></p>
                                <div>
                                    <a href="{{ url('client-profil') }}"
                                        class="btn-get-started animate_animated animate_fadeInUp scrollto">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(public/assets/img/slide/22.jpeg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <div class="section-title mt-4 p-4">
                                    <h2>Membuka Pelayanan Publik</h2>
                                </div>
                                <p style="font-size:20px">Terkait
                                    pengaduan konflik satwa seperti ular masuk rumah, konflik buaya di permukiman
                                    masyarakat, dan lain sebagainya.


                                <div>
                                    <a href="{{ url('client-rescue') }}"
                                        class="btn-get-started animate_animated animate_fadeInUp scrollto">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(public/assets/img/slide/3.jpeg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <div class="section-title mt-4 p-4">
                                    <h2>Reptil</h2>
                                </div>
                                <p style="font-size:20px">Reptil (binatang melata, atau dalam bahasa Latin "reptans" artinya
                                    'melata' atau 'merayap') adalah kelompok hewan vertebrata berdarah dingin dan....</p>


                                <div>
                                    <a href="{{ url('client-amfibi') }}"
                                        class="btn-get-started animate_animated animate_fadeInUp scrollto">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>
    {{-- <div class="section-title mt-4 pt-4">
        <h2>Amfibi</h2>

    </div>
    <div class="m-5 mt-2 text-center">
        <H5>Di dunia ini terdapat berbagai macam makhluk hidup mulai dari yang berukuran kecil hingga sangat besar.
            Dari 3000 spesies hewan amfibi didunia, ada 200an spesies di Indonesia yang tersebar diberbagai daerah baik yang
            terdapat dalam daerah daratan maupun perairan.</h5>
    </div>
    <div class="row mt-4 mx-4">
        @foreach ($amfibis as $amfibi)
            <div class="col-md-4 col-lg-3 rounded-5">
                <div class="card mb-2 shadow-sm rounded object-cover card-img-to">
                    <a href="{{ url("amfibi-detail/$amfibi->id_amfibi") }}">
                        <img src="{{ url("public/$amfibi->gambar1") }}" height="400px"
                            class="img-fluid rounded-top rounded-5">
                        <div class="card-body ">
                            <div class="card-body" style="color: black">
                                <h5 class="text-center"><strong>{{ $amfibi->nama }} </strong></h5>
                                <h6 class="text-center"><em>{{ $amfibi->nama_latin }}</em></h6>
                                <h6 class="text-center  bg-warning text-white py-2 px-2 rounded">Family:
                                    {{ $amfibi->family }}</h6>

                            </div>

                    </a>

                </div>
            </div>
    </div>
    @endforeach
    </div>

    <div class="section-title mt-4 p-4">
        <h2>Reptil</h2>

    </div>
    <div class="mx-4 pl-5 pr-5 pb-3 text-center">
        <H5>Indonesia sangat kaya akan flora dan fauna karena berada di lintasan Benua Atlantik, Pasifik dan Benua
            Australia.

            Berbagai fauna unik dan hanya ada di Indonesia yang memiliki tipe iklim tropis dan Hutan Tropis.

            Diantaranya adalah keanekaragaman Reptile yang sangat banyak, mungkin ratusan bahkan ribuan ataupuh ratusan
            ribu.</h5>
    </div>
    <div class="row mt-4 mx-4 mb-5">
        @foreach ($reptiles as $reptile)
            <div class="col-md-4 col-lg-3 rounded-5">
                <div class="card mb-2 shadow-sm rounded object-cover card-img-top">
                    <a href="{{ url("reptil-detail/$reptile->id_reptil") }}">
                        <img src="{{ url("public/$reptile->gambar1") }}" height="400px"
                            class="img-fluid rounded-top rounded-5">
                        <div class="card-body ">
                            <div class="card-body" style="color: black">
                                <h5 class="text-center"><strong>{{ $reptile->nama }} </strong></h5>
                                <h6 class="text-center"><em>{{ $reptile->nama_latin }}</em></h6>
                                <h6 class="text-center  bg-warning text-white py-2 px-2 rounded">Family:
                                    {{ $reptile->family }}</h6>

                            </div>

                    </a>

                </div>
            </div>
    </div>
    @endforeach
    </div> --}}
@endsection
