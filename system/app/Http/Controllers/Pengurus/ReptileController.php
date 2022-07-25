<?php

namespace App\Http\Controllers\Pengurus;

use Illuminate\Http\Request;
use App\Models\Reptile;
use App\Models\Provinsi;
use App\Models\User;
use App\Http\Controllers\Controller;

class ReptileController extends Controller
{
    function index()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_reptil'] = Reptile::all();
        return view('pengurus.reptile.index', $data);
    }

    function create()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_provinsi'] = Provinsi::all();
        return view('pengurus.reptile.create', $data);
    }
    function store(reptile $reptil)
    {

        $reptil = new Reptile;
        $reptil->id_pengurus = request('id_pengurus');
        $reptil->nama = request('nama');
        $reptil->nama_latin = request('nama_latin');
        $reptil->family = request('family');
        $reptil->status_berbisa = request('status_berbisa');
        $reptil->persebaran = request('persebaran');
        $reptil->deskripsi = request('deskripsi');
        $reptil->handleUploadgambar1();
        $reptil->handleUploadgambar2();
        $reptil->handleUploadgambar3();
        $reptil->save();

        return redirect('page-reptile')->with('success', 'Data Sukses Ditambahkan');
    }


    function show(reptile $reptil)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['reptil'] = $reptil;
        return view('pengurus/reptile.show', $data);
    }


    function edit(reptile $reptil)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_provinsi'] = Provinsi::all();
        $data['reptil'] = $reptil;
        return view('pengurus/reptile.edit', $data);
    }


    function update(reptile $reptil)
    {

        $reptil->id_pengurus = request('id_pengurus');
        $reptil->nama = request('nama');
        $reptil->nama_latin = request('nama_latin');
        $reptil->family = request('family');
        $reptil->status_berbisa = request('status_berbisa');
        $reptil->persebaran = request('persebaran');
        $reptil->deskripsi = request('deskripsi');
        $reptil->handleUploadgambar1();
        $reptil->handleUploadgambar2();
        $reptil->handleUploadgambar3();
        $reptil->save();

        return redirect('page-reptile')->with('succes', 'Data Berhasil Diedit');
    }

    function destroy(reptile $reptil)
    {
        $reptil->handleDeleteReptil();
        $reptil->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
