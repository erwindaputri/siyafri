<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Ebook;
use App\Models\User;

class EbookController extends Controller
{

    function index()
    {
        $data['user'] = auth()->user();
        $data['list_ebook'] = Ebook::all();
        return view('admin/ebook.index', $data);
    }

    function create()
    {
        $data['user'] = auth()->user();
        return view('admin.ebook.create', $data);
    }


    function store(ebook $ebook)
    {
        $ebook = new Ebook;
        $ebook->nama_ebook = request('nama_ebook');
        $ebook->handleUploadgambar();
        $ebook->handleUploadfile();
        $ebook->save();

        return redirect('ebook')->with('success', 'Data Sukses Ditambahkan');
    }



    function show($ebook)
    {
        $data['user'] = auth()->user();
        $data['ebook'] = Ebook::find($ebook);
        return view('admin.ebook.show', $data);
    }


    function edit(ebook $ebook)
    {
        $data['user'] = auth()->user();
        $data['ebook'] = $ebook;
        return view('admin/ebook.edit', $data);
    }



    function update(ebook $ebook)
    {
        $ebook->nama_ebook = request('nama_ebook');
        $ebook->handleUploadgambar();
        $ebook->save();

        return redirect('ebook')->with('warning', 'Data Berhasil Diedit');
    }


    function destroy(ebook $ebook)
    {
        $ebook->handleDeleteebook();
        $ebook->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
