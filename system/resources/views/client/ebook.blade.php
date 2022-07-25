@extends('tamplate.client')
@section('content')
    <section id="portfolio" class="portfolio" style="margin-top: 5%;">
        <div class="container">
            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container">

                    <div class="section-title">
                        <h2>E-book</h2>
                        <p>(Klik gambar untuk mendownload)</p>
                    </div>

                    <div class="row">
                        @foreach ($list_ebook as $ebook)


                            <div class="col-md-3">
                                <a href="{{ url("public/$ebook->file") }}">
                                <div class="member">
                                    <img src="{{ url("public/$ebook->gambar") }}" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <td class="text-center">
                                                <h4>{{ $ebook->nama_ebook }} </h4>
                                            </td>
                                            <span></span>
                                            <div class="social">
                                                <a href=""><i class=""></i></a>
                                                <a href=""><i class=""></i></a>
                                                <a href=""><i class=""></i></a>
                                                <a href=""><i class=""></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </section><!-- End Team Section -->
        @endsection
