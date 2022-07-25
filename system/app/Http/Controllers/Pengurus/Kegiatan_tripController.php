<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan_trip;
use App\Models\User;

class Kegiatan_tripController extends Controller
{

    function index()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['list_trip'] = Kegiatan_trip::all();
        return view('pengurus/kegiatan_trip.index', $data);
    }

    function create()
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        return view('pengurus/kegiatan_trip.create', $data);
    }


    function store(Request $request)
    {
        $trip = new Kegiatan_trip;
        $trip->judul = request('judul');
        $trip->deskripsi = request('deskripsi');
        $trip->handleUploadgambar();
        $trip->save();

        return redirect('page-kegiatan_trip')->with('success', 'Data Sukses Ditambahkan');
    }


    function show(kegiatan_trip $trip)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['trip'] = $trip;
        return view('pengurus/kegiatan_trip.show', $data);
    }


    function edit(kegiatan_trip $trip)
    {
        $data['pengurus'] = auth()->guard('pengurus')->user();
        $data['trip'] = $trip;
        return view('pengurus/kegiatan_trip.edit', $data);
    }



    function update(kegiatan_trip $trip)
    {
        $trip->judul = request('judul');
        $trip->deskripsi = request('deskripsi');
        $trip->handleUploadgambar();
        $trip->save();

        return redirect('page-kegiatan_trip')->with('succes', 'Data Berhasil Diedit');
    }


    function destroy(kegiatan_trip $trip)
    {
        $trip->handleDeleteGambar();
        $trip->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
