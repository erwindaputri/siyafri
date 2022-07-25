<?php

namespace App\Http\Controllers\Client;

use App\Models\Amfibi;
use App\Models\Kegiatan_trip;
use App\Models\Ebook;
use App\Models\Reptile;
use App\Models\Profil;
use App\Models\Provinsi;
use App\Models\Berita;


class ClientController extends Controller
{
    function clienthome()
    {
        return view('client/home');
    }

    public function profilanggota()
    {
        $data['anggota'] = auth()->guard('anggota')->user();
        return view('client.profil-anggota',$data);
    }

    function clientprofil(profil $profil)
    {
        $data['list_profl'] = Profil::all();
        return view('client/profil', $data);
    }

    function indexamfibi()
    {
        $data['list_provinsi'] = Provinsi::all();
        $data['list_amfibi'] = Amfibi::all();
        $data['anggota'] = auth()->guard('anggota')->user();
        return view('client/amfibi.index', $data);
    }

    function storeamfibi()
    {
        $amfibi = new Amfibi;
        $amfibi->id_anggota = request('id_anggota');
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

        return redirect('client-amfibi')->with('success', 'Data Sukses Ditambahkan');
    }

    function detailamfibi(amfibi $amfibi)
    {

        $data['list_amfibi'] = Amfibi::all();
        $data['amfibi'] = $amfibi;
        return view('client/amfibi.detail', $data);
    }

    function clientreptil()
    {
        $data['list_provinsi'] = Provinsi::all();
        $data['list_reptil'] = Reptile::all();
        $data['anggota'] = auth()->guard('anggota')->user();
        return view('client/reptil', $data);
    }

    function detailreptil(reptile $reptil)
    {
        $data['list_reptil'] = Reptile::all();
        $data['reptil'] = $reptil;
        return view('client/detail-reptil', $data);
    }

    function storereptil(reptile $reptil)
    {

        $reptil = new Reptile;
        $reptil->id_anggota = request('id_anggota');
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

        return redirect('client-reptil')->with('success', 'Data Sukses Ditambahkan');
    }

    function ebook(ebook $ebook)
    {
        $data['list_ebook'] = Ebook::all();
        $data['ebook'] = $ebook;
        return view('client/ebook', $data);
    }

    function file(ebook $ebook)
    {
        $data['list_ebook'] = Ebook::all();
        $data['ebook'] = $ebook;
        return view('client/ebook', $data);
    }

    function berita(berita $berita)
    {
        $data['list_berita'] = berita::all();
        $data['berita'] = $berita;
        return view('client/berita.berita-client', $data);
    }

    function beritadetail(berita $berita)
    {

        $data['berita'] = $berita;
        return view('client/berita.berita-detail', $data);
    }

    function trip(Kegiatan_trip $trip)
    {

        $data['list_trip'] = Kegiatan_trip::all();
        $data['trip'] = $trip;
        return view('client/trip.trip', $data);
    }
    function detailtrip(Kegiatan_trip $trip)
    {
        $data['list_trip'] = Kegiatan_trip::all();
        $data['trip'] = $trip;
        return view('client/trip.detail-trip', $data);
    }

    function clientrescue()
    {
        return view('client/rescue');
    }

    function loginclient()
    {
        return view('client/page-login');
    }

    function regitrasi()
    {
        return view('client/registrasi');
    }


}
