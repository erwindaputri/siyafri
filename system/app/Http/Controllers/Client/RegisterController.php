<?php

namespace App\Http\Controllers\Client;
use App\Models\Anggota;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        return view('client.registrasi');
    }


    public function store()
    {
        $anggota = New Anggota;
        $anggota->no_hp_anggota = request('no_hp_anggota');
        
       

        $anggota->username = request('username');
        $anggota->email = request('email');
        $anggota->konfirmasi_password = request('konfirmasi_password');
        $anggota->status = 1;
        $anggota->handleUpdateFoto();
        $anggota->save();

        return redirect('login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
