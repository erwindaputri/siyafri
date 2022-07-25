<?php

namespace App\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ebook;

class EbookController extends Controller
{

    function index()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_ebook'] = Ebook::all();
        return view('pengurus/ebook.index', $data);
    }

    function create()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        return view('pengurus.ebook.create', $data);
    }


    function store(ebook $ebook)
    {
        $ebook = new Ebook;
        $ebook->nama_ebook = request('nama_ebook');
        $ebook->handleUploadgambar();
        $ebook->handleUploadfile();
        $ebook->save();

        return redirect('page-ebook')->with('success', 'Data Sukses Ditambahkan');
    }



    function show($ebook)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['ebook'] = Ebook::find($ebook);
        return view('pengurus.ebook.show', $data);
    }


    function edit(ebook $ebook)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['ebook'] = $ebook;
        return view('pengurus/ebook.edit', $data);
    }



    function update(ebook $ebook)
    {
        $ebook->nama_ebook = request('nama_ebook');
        $ebook->handleUploadgambar();
        $ebook->save();

        return redirect('page-ebook')->with('warning', 'Data Berhasil Diedit');
    }


    function destroy(ebook $ebook)
    {
        $ebook->handleDeleteebook();
        $ebook->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
