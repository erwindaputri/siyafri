<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EbookController;
use App\Http\Controllers\Admin\Kegiatan_tripController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PengurusController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\AmfibiController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Admin\ContohController;
use App\Http\Controllers\Admin\kontenController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\ReptileController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Pengurus\AmfibiController as PengurusAmfibiController;
use App\Http\Controllers\Pengurus\Kegiatan_tripController as PengurusKegiatan_tripController;
use App\Http\Controllers\Pengurus\EbookController as PengurusEbookController;
use App\Http\Controllers\Pengurus\PengurusController as PengurusPengurusController;
use App\Http\Controllers\Pengurus\ProfilController as PengurusProfilController;
use App\Http\Controllers\Pengurus\ReptileController as PengurusReptileController;
use App\Http\Controllers\Pengurus\BeritaController as PengurusBeritaController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Controllers\Client\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('tamplate/admin');
// });
// Route::get('client', function () {
//     return view('tamplate/client');
// });
// Route::get('beranda', function () {
//     return view('admin/beranda/store');
// });




Route::group(['middleware' => 'auth'], function () {
Route::get('client-profil', [ClientController::class, 'clientprofil']);
Route::get('client-amfibi', [ClientController::class, 'indexamfibi']);

    // ADMIN DASBHORD
    Route::get('admin', [AdminController::class, 'index']);


    // ADMIN AMFIBI
    Route::get('amfibi', [AmfibiController::class, 'index']);
    Route::get('amfibi/create', [AmfibiController::class, 'create']);
    Route::get('amfibi/{amfibi}', [AmfibiController::class, 'show']);
    Route::get('amfibi/{amfibi}/edit', [AmfibiController::class, 'edit']);
    Route::post('amfibi-store', [AmfibiController::class, 'store']);
    Route::put('update-amfibi/{amfibi}', [AmfibiController::class, 'update']);
    Route::delete('amfibi/{amfibi}', [AmfibiController::class, 'destroy']);


    // ADMIN Ebook
    Route::get('ebook', [EbookController::class, 'index']);
    Route::get('ebook/create', [EbookController::class, 'create']);
    Route::post('ebook-store', [EbookController::class, 'store']);
    Route::get('ebook/{ebook}', [EbookController::class, 'show']);
    Route::get('ebook/{ebook}/edit', [EbookController::class, 'edit']);
    Route::put('update-ebook/{ebook}', [EbookController::class, 'update']);
    Route::delete('ebook/{ebook}', [EbookController::class, 'destroy']);


    // ADMIN super admin
    Route::get('user', [UserController::class, 'index']);
    Route::post('user-store', [UserController::class, 'store']);
    Route::get('user/{user}', [UserController::class, 'show']);
    Route::delete('user/{user}', [UserController::class, 'destroy']);
    Route::put('update-user/{user}', [UserController::class, 'update']);


    // ADMIN PENGURUS
    Route::get('pengurus', [PengurusController::class, 'index']);
    Route::post('pengurus-store', [PengurusController::class,  'store']);
    Route::get('pengurus/{pengurus}', [PengurusController::class, 'show']);
    Route::delete('pengurus/{pengurus}', [PengurusController::class, 'destroy']);
    Route::put('update-pengurus/{pengurus}', [PengurusController::class, 'update']);


    // ADMIN ANGGOTA
    Route::get('anggota', [AnggotaController::class, 'index']);
    Route::post('anggota-store', [AnggotaController::class,  'store']);
    Route::get('anggota/{anggota}', [AnggotaController::class, 'show']);
    Route::delete('anggota/{anggota}', [AnggotaController::class, 'destroy']);
    Route::put('anggota/{anggota}', [AnggotaController::class, 'update']);

    // ADMIN CONTOH
    Route::get('contoh', [ContohController::class, 'index']);
    Route::get('contoh/create', [ContohController::class, 'create']);


    // ADMIN KONTEN
    Route::get('konten', [KontenController::class, 'index']);
    Route::get('konten/create', [KontenController::class, 'create']);
    Route::post('konten-store', [kontenController::class, 'store']);
    Route::get('konten/{konten}', [KontenController::class, 'show']);
    Route::delete('konten/{konten}', [KontenController::class, 'destroy']);
    Route::get('konten/{konten}/edit', [KontenController::class, 'edit']);
    Route::put('update-konten/{konten}', [KontenController::class, 'update']);


    // ADMIN PROFIL
    Route::get('profil', [ProfilController::class, 'index']);
    Route::get('profil/create', [ProfilController::class, 'create']);
    Route::post('profil-store', [ProfilController::class, 'store']);
    Route::get('profil/{profil}', [ProfilController::class, 'show']);
    Route::delete('profil/{profil}', [ProfilController::class, 'destroy']);
    Route::get('profil/{profil}/edit', [ProfilController::class, 'edit']);
    Route::put('update-profil/{profil}', [ProfilController::class, 'update']);


    // ADMIN REPTIL
    Route::get('reptile', [ReptileController::class, 'index']);
    Route::get('reptile/create', [ReptileController::class, 'create']);
    Route::post('reptile-store', [ReptileController::class, 'store']);
    Route::get('reptile/{reptil}', [ReptileController::class, 'show']);
    Route::delete('reptile/{reptil}', [ReptileController::class, 'destroy']);
    Route::get('reptile/{reptil}/edit', [ReptileController::class, 'edit']);
    Route::put('update-reptile/{reptil}', [ReptileController::class, 'update']);


    // ADMIN TRIP
    Route::get('kegiatan_trip', [Kegiatan_tripController::class, 'index']);
    Route::get('kegiatan_trip/create', [Kegiatan_tripController::class, 'create']);
    Route::post('kegiatan_trip-store', [Kegiatan_tripController::class, 'store']);
    Route::get('kegiatan_trip/{trip}', [Kegiatan_tripController::class, 'show']);
    Route::delete('kegiatan_trip/{trip}', [Kegiatan_tripController::class, 'destroy']);
    Route::get('kegiatan_trip/{trip}/edit', [Kegiatan_tripController::class, 'edit']);
    Route::put('update-kegiatan_trip/{trip}', [Kegiatan_tripController::class, 'update']);


    // ADMIN berita
    Route::get('berita', [BeritaController::class, 'index']);
    Route::get('berita/create', [BeritaController::class, 'create']);
    Route::post('berita-store', [BeritaController::class, 'store']);
    Route::get('berita/{berita}', [BeritaController::class, 'show']);
    Route::delete('berita/{berita}', [BeritaController::class, 'destroy']);
    Route::get('berita/{berita}/edit', [BeritaController::class, 'edit']);
    Route::put('update-berita/{berita}', [BeritaController::class, 'update']);
});

Route::group(['middleware' => 'auth:pengurus'], function () {
    Route::get('page-pengurus', [PengurusPengurusController::class, 'index']);
    Route::post('page-pengurus-store', [PengurusPengurusController::class, 'store']);
    Route::get('page-pengurus/{pengurus}', [PengurusPengurusController::class, 'show']);
    Route::get('page-pengurus/create', [PengurusPengurusController::class, 'create']);

    // PENGURUS AMFIBI
    Route::get('page-amfibi', [PengurusAmfibiController::class, 'index']);
    Route::post('page-amfibi-store', [PengurusAmfibiController::class, 'store']);
    Route::get('{amfibi}/page-amfibi', [PengurusAmfibiController::class, 'show']);
    Route::get('create-page-amfibi', [PengurusAmfibiController::class, 'create']);
    Route::put('page-update-amfibi/{amfibi}', [PengurusAmfibiController::class, 'update']);
    Route::get('edit/{amfibi}/page-amfibi', [PengurusAmfibiController::class, 'edit']);
    Route::delete('page-delete-amfibi/{amfibi}', [PengurusAmfibiController::class, 'destroy']);



    // PENGURUS REPTIL
    Route::get('page-reptile', [PengurusReptileController::class, 'index']);
    Route::get('{reptil}/page-reptile', [PengurusReptileController::class, 'show']);
    Route::get('create-page-reptile', [PengurusReptileController::class, 'create']);
    Route::post('page-reptile-store', [PengurusReptileController::class, 'store']);
    Route::get('edit/{reptil}/page-reptile', [PengurusReptileController::class, 'edit']);
    Route::put('page-update-reptile/{reptil}', [PengurusReptileController::class, 'update']);
    Route::delete('page-delete-reptile/{reptil}', [PengurusReptileController::class, 'destroy']);

    // PENGURUS PROFIL
    Route::get('page-profil', [PengurusProfilController::class, 'index']);
    Route::post('page-profil-store', [PengurusProfilController::class, 'store']);
    Route::get('create-page-profil', [PengurusProfilController::class, 'create']);
    Route::get('{profil}/page-profil', [PengurusProfilController::class, 'show']);
    Route::get('edit/{profil}/page-profil', [PengurusProfilController::class, 'edit']);
    Route::put('page-update-profil/{profil}', [PengurusProfilController::class, 'update']);
    Route::delete('page-delete-profil/{profil}', [PengurusProfilController::class, 'destroy']);

    // PENGURUS TRIP
    Route::get('page-kegiatan_trip', [PengurusKegiatan_tripController::class, 'index']);
    Route::post('page-kegiatan_trip-store', [PengurusKegiatan_tripController::class, 'store']);
    Route::get('create-page-kegiatan_trip', [PengurusKegiatan_tripController::class, 'create']);
    Route::get('{trip}/page-kegiatan_trip', [PengurusKegiatan_tripController::class, 'show']);
    Route::get('edit/{trip}/page-kegiatan_trip', [PengurusKegiatan_tripController::class, 'edit']);
    Route::put('page-update-kegiatan_trip/{trip}', [PengurusKegiatan_tripController::class, 'update']);
    Route::delete('page-delete-kegiatan_trip/{trip}', [PengurusKegiatan_tripController::class, 'destroy']);


    // PENGURUS Ebook
    Route::get('page-ebook', [PengurusEbookController::class, 'index']);
    Route::post('page-ebook-store', [PengurusEbookController::class, 'store']);
    Route::get('create-page-ebook', [PengurusEbookController::class, 'create']);
    Route::get('{ebook}/page-ebook', [PengurusEbookController::class, 'show']);
    Route::get('edit/{ebook}/page-ebook', [PengurusEbookController::class, 'edit']);
    Route::put('page-update-ebook/{ebook}', [PengurusEbookController::class, 'update']);
    Route::delete('page-delete-ebook/{ebook}', [PengurusEbookController::class, 'destroy']);


    // PENGURUS berita
    Route::get('page-berita', [PengurusBeritaController::class, 'index']);
    Route::post('page-berita-store', [PengurusBeritaController::class, 'store']);
    Route::get('create-page-berita', [PengurusBeritaController::class, 'create']);
    Route::get('{berita}/page-berita', [PengurusBeritaController::class, 'show']);
    Route::get('edit/{berita}/page-berita', [PengurusBeritaController::class, 'edit']);
    Route::put('page-update-berita/{berita}', [PengurusBeritaController::class, 'update']);
    Route::delete('page-delete-berita/{berita}', [PengurusBeritaController::class, 'destroy']);
});





// ADMIN LOGIN
Route::get('login', [AuthController::class, 'Login'])->name('login');
Route::post('login', [AuthController::class, 'ProsesLogin']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');




// CLIENT
Route::get('/', [LandingController::class, 'clienthome']);
Route::get('profil-anggota', [ClientController::class, 'profilanggota']);
Route::get('client-profil', [ClientController::class, 'clientprofil']);
Route::get('client-amfibi', [LandingController::class, 'indexamfibi']);
Route::get('amfibi-detail/{amfibi}', [LandingController::class, 'detailamfibi']);
//Route::post('client-amfibi-store', [ClientController::class, 'storeamfibi']);

Route::get('client-reptil', [LandingController::class, 'clientreptil']);
Route::get('reptil-detail/{reptil}', [LandingController::class, 'detailreptil']);
//Route::post('client-reptil-store', [LandingController::class, 'storereptil']);

Route::get('client-rescue', [ClientController::class, 'clientrescue']);

Route::get('client-ebook', [ClientController::class, 'ebook']);
Route::get('file', [ClientController::class, 'file']);

Route::get('page-login', [ClientController::class, 'loginclient']);
Route::get('registrasi', [RegisterController::class, 'index']);
Route::post('registrasi-anggota', [RegisterController::class, 'store']);


Route::get('client-berita', [ClientController::class, 'berita']);
Route::get('detail-berita/{berita}', [ClientController::class, 'beritadetail']);

Route::get('client-trip', [ClientController::class, 'trip']);
Route::get('client-trip-detail/{trip}', [ClientController::class, 'detailtrip']);
