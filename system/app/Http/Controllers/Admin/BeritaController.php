<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\User;

class BeritaController extends Controller
{

    function index()
    {
        $data['user'] = auth()->user();
        $data['list_berita'] = Berita::all();
        return view('admin/berita.index', $data);
    }

    function create()
    {
        $data['user'] = auth()->user();
        return view('admin/berita.create', $data);
    }


    function store(Request $request)
    {
        $berita = new Berita();
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        $berita->handleUploadgambar();
        $berita->save();

        return redirect('berita')-> with('success', 'Data Sukses Ditambahkan');
    }


    function show(berita $berita)
    {
        $data['user'] = auth()->user();
        $data['berita'] = $berita;
        return view('admin/berita.show', $data);
    }


    function edit(berita $berita)
    {
        $data['user'] = auth()->user();
        $data['berita'] = $berita;
        return view('admin/berita.edit', $data);
    }



    function update(berita $berita)
    {
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        $berita->handleUploadgambar();
        $berita->save();

        return redirect('berita')->with('warning', 'Data Berhasil Diedit');
    }


    function destroy(berita $berita)
    {
        $berita->handleDeleteberita();
        $berita->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
