<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Pengurus;
use App\Models\User;

class PengurusController extends Controller
{

    function index()
    {
        $data['user'] = auth()->user();
        $data['list_pengurus'] = Pengurus::all();
        return view('admin/pengurus.index', $data);
    }


    function create()
    {
        $data['user'] = auth()->user();
    }


    function store(Request $request)
    {
        $pengurus = new Pengurus;
        $pengurus->username = request('username');
        $pengurus->password = bcrypt(request('password'));
        $pengurus->handleUpdateFoto();
        $pengurus->save();

        return redirect('pengurus')->with('success', 'Data Sukses Ditambahkan');
    }


    function show($pengurus)
    {
        $data['user'] = auth()->user();
        $data['pengurus'] = Pengurus::find($pengurus);
        return view('admin.pengurus.show', $data);
    }


    function edit($id)
    {
        $data['user'] = auth()->user();
    }


    function update(Pengurus $pengurus)
    {
        $pengurus->username = request('username');
        $pengurus->password = bcrypt(request('password'));
        $pengurus->handleUpdateFoto();
        $pengurus->save();

        return redirect('pengurus')->with('warning', 'Data Sukses Ditambahkan');
    }


    function destroy(pengurus $pengurus)
    {
        $pengurus->handleDeleteFoto();
        $pengurus->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
