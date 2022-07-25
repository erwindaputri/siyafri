<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use App\Models\Amfibi;
use App\Models\Anggota;
use App\Models\Berita;
use App\Models\Ebook;
use App\Models\Kegiatan_trip;
use App\Models\Profil;
use App\Models\Reptile;
use Illuminate\Http\Request;
use App\Models\User;

class PengurusController extends Controller
{

    function index()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();

        $data['user'] = auth()->user();
        $data['reptil'] = Reptile::all()->count();
        $data['amfibi'] = Amfibi::all()->count();
        $data['berita'] = Berita::all()->count();
        $data['trip'] = Kegiatan_trip::all()->count();
        $data['profil'] = Profil::all()->count();
        $data['anggota'] = Anggota::all()->count();
        $data['ebook'] = Ebook::all()->count();

        return view('pengurus/beranda.index', $data)->with('success', 'Selamat datang di Siyafri');
    }

    function create()
    {
        //
    }

    function store(Request $request)
    {
        //
    }

    function show($id)
    {
        //
    }

    function edit($id)
    {
        //
    }

    function update(Request $request, $id)
    {
        //
    }

    function destroy($id)
    {
        //
    }
}
