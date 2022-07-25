@extends('tamplate.client')
@section('content')
    <div class="section-title mt-5 pt-5">
        <h2>Berita</h2>

    </div>



    <br><div class="container-fluid ">
        <div class="row  ">
            @foreach ($list_berita as $berita)
                <div class="card mb-4 mx-4" style="max-width: 600px;">
                    <div class="row g-4">
                        <div class="col-md-4 ">
                            <img style="width: 100%; position: relative; text-align: center"
                                src="{{ url("public/$berita->gambar") }}" class="card-img-top" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="{{ url("detail-berita/$berita->id_berita") }}" class="link-danger">
                                    <h5 class="card-title">{{ $berita->judul }}</h5>
                                </a>

                                <p class="card-text">
                                    <small class="text-muted">Upload
                                        {{ date('d - M - Y'), strtotime($berita->created_at) }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
