<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Kegiatan_trip;
use App\Models\User;

class Kegiatan_tripController extends Controller
{

    function index()
    {
        $data['user'] = auth()->user();
        $data['list_trip'] = Kegiatan_trip::all();
        return view('admin/kegiatan_trip.index', $data);
    }

    function create()
    {
        $data['user'] = auth()->user();
        return view('admin/kegiatan_trip.create', $data);
    }


    function store(Request $request)
    {
        $trip = new Kegiatan_trip;
        $trip->judul = request('judul');
        $trip->deskripsi = request ('deskripsi');
        $trip-> handleUploadgambar();
        $trip->save();

        return redirect('kegiatan_trip')->with('success', 'Data Sukses Ditambahkan');
    }


    function show(kegiatan_trip $trip)
    {
        $data['user'] = auth()->user();
        $data['trip'] = $trip;
        return view('admin/kegiatan_trip.show', $data);
    }


    function edit(kegiatan_trip $trip)
    {
        $data['user'] = auth()->user();
        $data['trip'] = $trip;
        return view('admin/kegiatan_trip.edit', $data)->with('succes','Data Berhasil Diedit');
    }



    function update(kegiatan_trip $trip)
    {
        $trip->judul = request('judul');
        $trip->deskripsi = request ('deskripsi');
        $trip-> handleUploadgambar();

        $trip->save();

        return redirect('kegiatan_trip')->with('warning','Data Berhasil Diedit');
    }


    function destroy(kegiatan_trip $trip)
    {
        $trip->handleDeleteGambar();
        $trip->delete();
        return back()->with('danger','Data Berhasil Dihapus');
    }
}
