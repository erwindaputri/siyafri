<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	function Login(){
		return view('login');
	}

	function ProsesLogin(Request $request){
		if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin')->with('success', 'Selamat datang di Siyafri');
        }

        if (auth()->guard('pengurus')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('page-pengurus')->with('success', 'Selamat datang di Siyafri');

        }

        if (auth()->guard('anggota')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('home')->with('success', 'Selamat datang di Siyafri');

        }

		return redirect('login')->with('danger', 'Silahkan Cek Email dan Password Anda');
	}



	function logout(){
		Auth::logout();
        auth()->guard('pengurus')->logout();
        auth()->guard('anggota')->logout();
		return redirect('/');
	}

	function registration(){

	}

	function forgotPassword(){

	}
} ?>
