<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Reptile;
use App\Models\Provinsi;
use App\Models\User;

class ReptileController extends Controller
{
    function index()
    {
        $data['user'] = auth()->user();
        $data['list_reptil'] = Reptile::all();
        return view('admin/reptile.index', $data);
    }

    function create()
    {
        $data['user'] = auth()->user();
        $data['list_provinsi'] = Provinsi::all();
        return view('admin/reptile.create', $data);
    }
    function store(reptile $reptil)
    {

        $reptil = new Reptile;
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

        return redirect('reptile')->with('success', 'Data Sukses Ditambahkan');
    }


    function show(reptile $reptil)
    {
        $data['user'] = auth()->user();
        $data['reptil'] = $reptil;
        return view('admin/reptile.show', $data);
    }


    function edit(reptile $reptil)
    {
        $data['user'] = auth()->user();
        $data['list_provinsi'] = Provinsi::all();
        $data['reptil'] = $reptil;
        return view('admin/reptile.edit', $data);
    }


    function update(reptile $reptil)
    {

        $reptil->nama = request('nama');
        $reptil->nama_latin = request('nama_latin');
        $reptil->family = request('family');
        $reptil->status_berbisa = request('status_berbisa');
        $reptil->persebaran = request('persebaran');
        $reptil->deskripsi = request('deskripsi');
        $reptil->handleUploadgambar1();
        $reptil->save();

        return redirect('reptile')->with('warning', 'Data Sukses Di Edit');
    }

    function destroy(reptile $reptil)
    {
        $reptil->handleDeleteReptil();
        $reptil->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
