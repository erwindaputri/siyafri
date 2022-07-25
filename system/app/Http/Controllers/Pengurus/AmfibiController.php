<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amfibi;
use App\Models\Provinsi;
use App\Models\User;

class AmfibiController extends Controller
{

    function index()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_amfibi'] = Amfibi::all();
        return view('pengurus.amfibi.index', $data);
    }

    function create()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_provinsi'] = Provinsi::all();
        return view('pengurus.amfibi.create', $data);
    }


    function store(Request $request)
    {
        $amfibi = new Amfibi;
        $amfibi->nama = request('nama');
        $amfibi->id_pengurus = request('id_pengurus');
        $amfibi->nama_latin = request('nama_latin');
        $amfibi->family = request('family');
        $amfibi->persebaran = request('persebaran');
        $amfibi->kabupaten_kecamatan = request('kabupaten_kecamatan');
        $amfibi->deskripsi = request('deskripsi');
        $amfibi-> handleUploadgambar1();
        $amfibi-> handleUploadgambar2();
        $amfibi-> handleUploadgambar3();
        $amfibi->save();

        return redirect('page-amfibi')->with('success', 'Data Sukses Ditambahkan');
    }

    function show(amfibi $amfibi){
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['amfibi'] = $amfibi;
        return view('pengurus.amfibi.show', $data);
    }


    function edit(amfibi $amfibi){
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_amfibi'] = Amfibi::all();
        $data['list_provinsi'] = Provinsi::all();
        $data['amfibi'] = $amfibi;
        return view('pengurus.amfibi.edit', $data);
    }

    function update(amfibi $amfibi){

        $amfibi->id_pengurus = request('id_pengurus');
        $amfibi->nama = request('nama');
        $amfibi->nama_latin = request('nama_latin');
        $amfibi->family = request('family');
        $amfibi->persebaran = request('persebaran');
        $amfibi->kabupaten_kecamatan = request('kabupaten_kecamatan');
        $amfibi->deskripsi = request('deskripsi');
        $amfibi-> handleUploadgambar1();
        $amfibi-> handleUploadgambar2();
        $amfibi-> handleUploadgambar3();

        $amfibi->save();

        return redirect('page-amfibi')->with('warning', 'Data Sukses Di Edit');
    }


    function destroy(amfibi $amfibi)
    {
        $amfibi->handleDeleteAmfibi();
        $amfibi->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
