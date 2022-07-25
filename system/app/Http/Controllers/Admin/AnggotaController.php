<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\User;

class AnggotaController extends Controller
{

    function index()
    {
        $data['user'] = auth()->user();
        $data['list_anggota'] = Anggota::all();
        return view('admin/anggota.index', $data);
    }


    function create()
    {
        //
    }


    function store(Request $request)
    {
        $anggota = New Anggota;
        $anggota->username = request('username');
        $anggota->email = request('email');
        $anggota->password = bcrypt(request('password'));
        $anggota-> handleUpdateFoto();
        $anggota->save();

        return redirect('anggota')->with('success', 'Data Sukses Ditambahkan');
    }


    function show($anggota){
        $data['user'] = auth()->user();
        $data['anggota'] = Anggota::find($anggota);
		return view('admin.anggota.show', $data);

    }


    function edit($id)
    {
        $data['user'] = auth()->user();
    }


    function update(anggota $anggota)
    {

        $anggota->konfirmasi_password = request('konfirmasi_password');
        $anggota->password = bcrypt(request('konfirmasi_password'));
        $anggota->status = 2;
        $anggota->save();

        return redirect('anggota')->with('warning', 'Data Sukses Ditambahkan');
    }


    function destroy(anggota $anggota)
    {
        $anggota->handleDeleteFoto();
		$anggota->delete();
		return back()->with('danger','Data Berhasil Dihapus');
    }
}
