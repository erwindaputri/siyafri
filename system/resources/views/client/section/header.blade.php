<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo"><a href="{{ url('/') }}"><img src="{{ url('public') }}/assets/img/logo.png"
                    alt="logo" height="60"> SIYAFRI</a></div>


        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ checkRouteActive('/') }}" href="{{ url('/') }}">Home</a>
                </li>
                <li><a class="nav-link scrollto {{ checkRouteActive('client-profil') }}"
                        href="{{ url('client-profil') }}">Profil</a></li>
                <li><a class="nav-link scrollto {{ checkRouteActive('client-amfibi') }} "
                        href="{{ url('client-amfibi') }}">Amfibi</a></li>
                <li><a class="nav-link scrollto {{ checkRouteActive('client-reptil') }} "
                        href="{{ url('client-reptil') }}">Reptile</a></li>
                <li><a class="nav-link scrollto {{ checkRouteActive('client-rescue') }} "
                        href="{{ url('client-rescue') }}">Rescue</a></li>
                <li><a class="nav-link scrollto {{ checkRouteActive('client-ebook') }} "
                        href="{{ url('client-ebook') }}">E-book</a></li>
                <li class="dropdown"><a href="#"><span>Kegiatan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a {{ checkRouteActive('client-berita') }}
                                href="{{ url('client-berita') }}">Berita</a></li>
                        {{-- <li><a {{ checkRouteActive('client-trip') }} href="{{ url('client-trip') }}">Trip</a>
                        </li> --}}

                    </ul>
                </li>
                {{-- <li><a class="nav-link scrollto" href="{{ url('registrasi') }}">Pendaftaran</a></li> --}}

                @if (Auth::check())


                    <strong> {{ request()->user()->username }}</strong>
                @elseif(Auth::guard('anggota')->check())
                    <li><a href="{{ url('profil-anggota') }}" class="getstarted scrollto"> Profil Anggota</a></li>
                    <br>
                @else
                    <li><a class="getstarted scrollto" href="{{ url('login') }}">LOGIN</a>
                @endif
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- ======= Hero Section ======= -->
