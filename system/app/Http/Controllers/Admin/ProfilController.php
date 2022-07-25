<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\User;

class ProfilController extends Controller
{

    function index()
    {
        $data['user'] = auth()->user();
        $data['list_profil'] = profil::all();
        return view('admin/profil.index', $data);
    }


    function create(profil $profil)
    {

        $data['user'] = auth()->user();
        $data['profil'] = $profil;
        return view('admin/profil.create', $data);
    }


    function store(profil $profil)
    {

        $profil = new Profil;
        $profil->nama_file = request('nama_file');
        $profil->handleUploadfiledata();
        $profil->save();

        return redirect('profil')->with('success', 'Data Sukses Ditambahkan');
    }


    function show(profil $profil)
    {
        $data['user'] = auth()->user();
        $data['profil'] = $profil;
        return view('admin/profil.show', $data);
    }


    function edit(profil $profil)
    {
        $data['user'] = auth()->user();
        $data['profil'] = $profil;
        return view('admin/profil.edit', $data);
    }


    function update(Profil $profil)
    {

        $profil->nama_file = request('nama_file');
        $profil->handleUploadfiledata();
        $profil->save();

        return redirect('profil')->with('warning', 'Data Berhasil Diedit');
    }


    function destroy(profil $profil)
    {
        $profil->handleDeletefiledata();
        $profil->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
