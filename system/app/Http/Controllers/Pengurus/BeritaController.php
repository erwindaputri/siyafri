<?php

namespace App\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\User;
use App\Http\Controllers\Controller;

class beritaController extends Controller
{

    function index()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_berita'] = Berita::all();
        return view('pengurus/berita.index', $data);
    }

    function create()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        return view('pengurus/berita.create', $data);
    }


    function store(Request $request)
    {
        $berita = new Berita();
        $berita->judul = request('judul');
        $berita->deskripsi = request ('deskripsi');
        $berita-> handleUploadgambar();
        $berita->save();

        return redirect('page-berita')->with('success', 'Data Sukses Ditambahkan');
    }


    function show(berita $berita)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['berita'] = $berita;
        return view('pengurus/berita.show', $data);
    }


    function edit(berita $berita)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['berita'] = $berita;
        return view('pengurus/berita.edit', $data);
    }



    function update(berita $berita)
    {
        $berita->judul = request('judul');
        $berita->deskripsi = request ('deskripsi');
        $berita-> handleUploadgambar();
        $berita->save();

        return redirect('page-berita')->with('succes','Data Berhasil Diedit');
    }


    function destroy(berita $berita)
    {
        $berita->handleDeleteberita();
        $berita->delete();
        return back()->with('danger','Data Berhasil Dihapus');
    }
}
