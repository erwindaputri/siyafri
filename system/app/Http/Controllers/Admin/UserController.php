<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index()
    {

        $data['user'] = auth()->user();
        $data['list_user'] = User::all();
        return view('admin/user.index', $data);
    }

    function create()
    {
        $data['user'] = auth()->user();
    }


    function store(Request $request)
    {
        $user = new User;
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->handleUpdateFoto();
        $user->save();

        return redirect('user')->with('success', 'Data Sukses Ditambahkan');
    }

    function show($user)
    {
        $data['user'] = auth()->user();
        $data['user'] = User::find($user);
        return view('admin.user.show', $data);
    }

    function edit($id)
    {
        $data['user'] = auth()->user();
    }

    function update(user $user)
    {
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->handleUpdateFoto();
        $user->save();

        return redirect('user')->with('succes', 'Data Berhasil Diedit');
    }

    function destroy(user $user)
    {
        $user->handleDeleteFoto();
        $user->delete();
        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
