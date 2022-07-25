@extends('tamplate.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Detail data anggota
                    </div>
                    @csrf

                    Username : {{ $anggota->username }} <br>
                    @ : {{ $anggota->email }} <br>
                    Nama :{{ $anggota->nama }} <br>
                    Tempat lahir : {{ $anggota->tempat_lahir }} <br>
                    Tanggal lahir :{{ $anggota->tanggal_lahir }} <br>

                </div>
            </div>
            <hr>

        </div>
    </div>
    </div>
    </div>
@endsection
