<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Amfibi;
use App\Models\Kegiatan_trip;
use App\Models\Kerjasama;
use App\Models\Reptile;
use App\Models\Profil;
use App\Models\Provinsi;
use App\Models\Seminar;

class LandingController extends Controller
{
    function clienthome(Request $request)
    {
        $amfibis = Amfibi::orderBy('created_at', 'desc')->paginate(4);
        $reptiles = Reptile::orderBy('created_at', 'desc')->paginate(4);
        $data = ['title' => 'Amfibi', 'amfibis' => $amfibis, 'reptiles'=>$reptiles];
       
       
        
        return view('client/home', $data)->with('no',($request->input('page', 1) - 1) * 4
        );
        
    }

    function indexamfibi(Request $request)
    {
        $amfibis = Amfibi::orderBy('created_at', 'desc')->paginate(12);
        $data = ['title' => 'Amfibi', 'amfibis' => $amfibis];
        return view('client/amfibi.index', $data)->with('no',($request->input('page', 1) - 1) * 12
        );
    }

    function detailamfibi(amfibi $amfibi)
    {
        $data['list_amfibi'] = Amfibi::all();
        $data['amfibi'] = $amfibi;
        return view('client/amfibi.show', $data);
    }

    function clientreptil(Request $request)
    {
        $reptiles = Reptile::orderBy('created_at', 'desc')->paginate(12);
        $data = ['title' => 'Reptile', 'reptiles' => $reptiles];
        return view('client/reptil.index', $data)->with(
            'no',
            ($request->input('page', 1) - 1) * 12
        );
    }

    function detailreptil(reptile $reptil)
    {
        $data['list_reptil'] = Reptile::all();
        $data['reptil'] = $reptil;
        return view('client/detail-reptil', $data);
    }

    /*   
    

    

    

   

    function seminar(seminar $seminar)
    {
        $data['list_seminar'] = Seminar::all();
        $data['seminar'] = $seminar;
        return view('client/seminar.seminar-client', $data);
    }

    function seminardetail(seminar $seminar)
    {

        $data['seminar'] = $seminar;
        return view('client/seminar.seminar-detail', $data);
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

    
*/
}
