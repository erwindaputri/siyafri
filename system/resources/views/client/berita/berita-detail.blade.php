@extends('tamplate.client')
@section('content')

    <section id="portfolio" class="portfolio" style="margin-top: 5%;">
        <div class="container">



                    <img style="width: 40%; position: relative; text-align: center" src="{{ url("public/$berita->gambar") }}"
                        class="card-img-top" alt="...">


                        <div class="row">


                            <div class="span12 well">



                                <p><a href="#" class="btn btn-inverse">Diposkan pada
                                        {{ date('d - M - Y'), strtotime($berita->created_at) }}</a> </p>



                                <div class="content-heading">
                                    <h3>{{ $berita->judul }}</h3>
                                </div>



                            </div>
                            <p style="text-align:justify;">{{($berita->deskripsi) }}</p>

                            <div style="clear:both;"></div>
                </div>

            </a>

        </div>
    </section>
@endsection

