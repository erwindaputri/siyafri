<?php

namespace App\Http\Controllers\Pengurus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten;

class KontenController extends Controller
{

    function index()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_konten'] = Konten::all();
        return view('pengurus/konten.index', $data);
    }


    function create()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        return view('pengurus/konten.create');
    }


    function store()
    {
        $konten = new Konten;
        $konten->nama_konten = request('nama_konten');
        $konten->deskripsi = request('deskripsi');


        $konten->save();

        return redirect('konten')>with('success', 'Data Sukses Ditambahkan');

    }


    function show(konten $konten)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['konten'] = $konten;
        return view('pengurus/konten.show', $data);
    }


    function edit(konten $konten)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['konten'] = $konten;
        return view('pengurus/konten.edit', $data);
    }

   function update(Konten $konten)
    {

        $konten->nama_konten = request('nama_konten');
        $konten->deskripsi = request('deskripsi');
        $konten->save();

        return redirect('konten')->with('succes','Data Berhasil Diedit');

    }


    function destroy(konten $konten)
    {
        $konten->handleDeleteKonten();
		$konten->delete();
		return back()->with('danger','Data Berhasil Dihapus');
    }

}
