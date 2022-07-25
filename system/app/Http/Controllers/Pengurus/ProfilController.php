<?php

namespace App\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\User;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{

    function index()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_profil'] = profil::all();
        return view('pengurus/profil.index', $data);
    }


    function create()
    {

        $data['pengurus'] = auth()->guard('pengurus')->user();
        return view('pengurus/profil.create', $data);
    }


    function store(profil $profil)
    {

        $profil = new Profil;
        $profil->nama_file = request('nama_file');
        $profil->handleUploadfiledata();
        $profil->save();

        return redirect('page-profil')->with('success', 'Data Sukses Ditambahkan');
    }


    function show(profil $profil)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['profil'] = $profil;
        return view('pengurus/profil.show', $data);
    }


    function edit(profil $profil)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['profil'] = $profil;
        return view('pengurus/profil.edit', $data);
    }


    function update(Profil $profil)
    {

        $profil->nama_file = request('nama_file');
        $profil->handleUploadfiledata();
        $profil->save();

        return redirect('page-profil')->with('succes', 'Data Berhasil Diedit');
    }


    function destroy(profil $profil)
    {
        $profil->handleDeletefiledata();
        $profil->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
