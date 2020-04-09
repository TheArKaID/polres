<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "FrontController@index");

Route::get('/pelayanan/pelayanan-sim', function () {
    return view('pages.pelayanan.pelayanan-sim');
});

Route::get('/inovasi/inovasi-1', function () {
    return view('pages.inovasi.inovasi-1');
});

Route::get('/berita/berita-1', function () {
    return view('pages.berita.berita-1');
});

Route::get('/inovasi/inovasi-all', function () {
    return view('pages.inovasi.inovasi-all');
});

Route::get('/galeri/galeri-all', function () {
    return view('pages.galeri.galeri-all');
});

Route::get('/pelayanan/pelayanan-all', function () {
    return view('pages.pelayanan.pelayanan-all');
});

Route::get('/pengaduan', function () {
    return view('pages.pengaduan.pengaduan');
});

Route::get('/pengaduan/cek-status', function () {
    return view('pages.pengaduan.cek-status');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin', function () {
        return view('pages.admin.dashboard');
    })->name('admin');
    
    // Banner
    Route::get('/admin/banner/', "AdminController@banner");
    Route::get('/admin/banner/tambah', "AdminController@tambahBanner");
    Route::post('/admin/banner/prosestambah', "AdminController@prosesTambahBanner");
    Route::get('/admin/banner/ubah/{banner}', "AdminController@editBanner");
    Route::post('/admin/banner/prosesedit', "AdminController@prosesEditBanner");
    Route::get('/admin/banner/hapus/{id}', "AdminController@prosesHapusBanner");

    // Pelayanan
    Route::get('/admin/pelayanan/', "AdminController@pelayanan");
    Route::get('/admin/pelayanan/tambah', "AdminController@tambahPelayanan");
    Route::post('/admin/pelayanan/prosestambah', "AdminController@prosesTambahPelayanan");
    Route::get('/admin/pelayanan/ubah/{pelayanan}', "AdminController@editPelayanan");
    Route::post('/admin/pelayanan/prosesedit',"AdminController@prosesEditPelayanan");
    Route::get('/admin/pelayanan/hapus/{id}', "AdminController@prosesHapusPelayanan");

    // Inovasi
    Route::get('/admin/inovasi/', "AdminController@inovasi");
    Route::get('/admin/inovasi/tambah', "AdminController@tambahInovasi");
    Route::post('/admin/inovasi/prosestambah', "AdminController@prosesTambahInovasi");
    Route::get('/admin/inovasi/ubah/{inovasi}', "AdminController@editInovasi");
    Route::post('/admin/inovasi/prosesedit', "AdminController@prosesEditInovasi");
    Route::get('/admin/inovasi/hapus/{id}', "AdminController@prosesHapusInovasi");
    
    // Galeri
    Route::get('/admin/galeri/', "AdminController@galeri");
    Route::get('/admin/galeri/tambah', "AdminController@tambahGaleri");
    Route::post('/admin/galeri/prosestambah', "AdminController@prosesTambahGaleri");
    
    Route::get('/admin/galeri/ubah', function () {
        return view('pages.admin.galeri.edit');
    });
    
    
    Route::get('/admin/berita/tambah', function () {
        return view('pages.admin.berita.create');
    });
    
    Route::get('/admin/berita/', function () {
        return view('pages.admin.berita.index');
    });
    
    Route::get('/admin/berita/ubah', function () {
        return view('pages.admin.berita.edit');
    });
    
    Route::get('/admin/pengaduan/', function () {
        return view('pages.admin.pengaduan.index');
    });
    
    Route::get('/admin/pengaduan/ubah', function () {
        return view('pages.admin.pengaduan.reply');
    });
    
    Route::get('/home', 'HomeController@index')->name('home');
});


