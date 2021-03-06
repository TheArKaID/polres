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
Route::get('/search/{search}', "FrontController@search");

Route::get('/polsek/{polsek}', "FrontController@polsekOne");

Route::get('/berita/berita-all', "FrontController@berita");
Route::get('/berita/{berita}', "FrontController@beritaOne");
Route::post('/berita/komentar', "FrontController@beritaKomentar");

Route::get('/inovasi/inovasi-all', "FrontController@inovasi");
Route::get('/inovasi/{inovasi}', "FrontController@inovasiOne");

Route::get('/galeri/galeri-all', "FrontController@galeri");

Route::get('/pelayanan/pelayanan-all', "FrontController@pelayanan");
Route::get('/pelayanan/{pelayanan}', "FrontController@pelayananOne");

Route::get('/tupoksi/{key?}/', "FrontController@tupoksi");
Route::get('/tupoksi/detail/{tupoksi}/{key?}/{act?}', "FrontController@tupoksiOne");

Route::get('/pengaduan', "FrontController@pengaduan");
Route::post('/pengaduan/lapor', "FrontController@laporPengaduan");
Route::get('/pengaduan/cek-status', "FrontController@cekPengaduan");
Route::post('/pengaduan/prosescekstatus', "FrontController@prosesCekPengaduan");
Route::get('/pengaduan/prosescekstatus', "FrontController@prosesCekPengaduan");
Route::post('/pengaduan/balas', "FrontController@prosesBalasPengaduan");

Route::get('/personil', "FrontController@personil");
Route::get('/personil/detail/{personil}', "FrontController@personilOne");

Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin', "AdminController@admin")->name('admin');
    Route::get('/admin/repassword', "AdminController@repassword");
    Route::post('/admin/repassword', "AdminController@resetpassword");

    // Pengumuman
    Route::get('/admin/pengumuman/', "AdminController@pengumuman");
    Route::get('/admin/pengumuman/tambah', "AdminController@tambahPengumuman");
    Route::post('/admin/pengumuman/prosestambah', "AdminController@prosesTambahPengumuman");
    Route::get('/admin/pengumuman/hapus/{id}', "AdminController@prosesHapusPengumuman");
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
    Route::post('/admin/pelayanan/prosesedit', "AdminController@prosesEditPelayanan");
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
    Route::get('/admin/galeri/hapus/{id}', "AdminController@prosesHapusGaleri");

    // Berita
    Route::get('/admin/berita/', "AdminController@berita");
    Route::get('/admin/berita/tambah', "AdminController@tambahBerita");
    Route::post('/admin/berita/prosestambah', "AdminController@prosesTambahBerita");
    Route::get('/admin/berita/ubah/{berita}', "AdminController@editBerita");
    Route::post('/admin/berita/prosesedit', "AdminController@prosesEditBerita");
    Route::get('/admin/berita/hapus/{id}', "AdminController@prosesHapusBerita");

    // Pengaduan
    Route::get('/admin/pengaduan/', "AdminController@pengaduan");
    Route::get('/admin/pengaduan/tambahKategori', "AdminController@tambahKategoriPengaduan");
    Route::post('/admin/pengaduan/prosestambahkategori', "AdminController@prosesTambahKategoriPengaduan");
    Route::get('/admin/pengaduan/hapusKategori/{id}', "AdminController@hapusKategoriPengaduan");
    Route::get('/admin/pengaduan/balas/{pengaduan}', "AdminController@balasPengaduan");
    Route::post('/admin/pengaduan/balas', "AdminController@prosesBalasPengaduan");
    Route::post('/admin/pengaduan/setstatus', "AdminController@prosesStatusPengaduan");

    // Polsek
    Route::get('/admin/polsek/', "AdminController@polsek");
    Route::get('/admin/polsek/create', "AdminController@tambahPolsek");
    Route::post('/admin/polsek/prosestambah', "AdminController@prosesTambahPolsek");
    Route::get('/admin/polsek/edit/{polsek}', "AdminController@editPolsek");
    Route::post('/admin/polsek/prosesedit', "AdminController@prosesEditPolsek");
    Route::get('/admin/polsek/hapus/{id}', "AdminController@prosesHapusPolsek");
    Route::get('/admin/polsek/tambahwilayah', "AdminController@tambahWilayah");
    Route::post('/admin/polsek/prosestambahwilayah', "AdminController@prosesTambahWilayah");
    Route::get('/admin/polsek/hapuswilayah/{id}', "AdminController@hapusWilayah");

    // Setting
    Route::get('/admin/settings/', "AdminController@setting");
    Route::get('/admin/settings/ubah', "AdminController@editSetting");
    Route::post('/admin/settings/prosesedit', "AdminController@prosesEditSetting");

    // Tupoksi
    Route::get('/admin/tupoksi', "AdminController@tupoksi");
    Route::get('/admin/tupoksi/tambah', "AdminController@tambahTupoksi");
    Route::post('/admin/tupoksi/prosestambah', "AdminController@prosesTambahTupoksi");
    Route::get('/admin/tupoksi/ubah/{tupoksi}', "AdminController@editTupoksi");
    Route::post('/admin/tupoksi/prosesedit', "AdminController@prosesEditTupoksi");
    Route::get('/admin/tupoksi/hapus/{id}', "AdminController@prosesHapusTupoksi");

    // Personil
    Route::get('/admin/personil', "AdminController@personil");
    Route::get('/admin/personil/tambah', "AdminController@tambahPersonil");
    Route::post('/admin/personil/prosestambah', "AdminController@prosesTambahPersonil");
    Route::get('/admin/personil/ubah/{personil}', "AdminController@editPersonil");
    Route::post('/admin/personil/prosesedit', "AdminController@prosesEditPersonil");
    Route::get('/admin/personil/hapus/{id}', "AdminController@prosesHapusPersonil");
});
