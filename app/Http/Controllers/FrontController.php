<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Pelayanan;
use App\Inovasi;
use App\Galeri;
use App\Pengumuman;

class FrontController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        $pelayanan = Pelayanan::all();
        $inovasi = Inovasi::all();
        $galeri = Galeri::all();
        $pengumuman = Pengumuman::all();

        return view('pages.home', [
            'banner' => $banner,
            'pelayanan' => $pelayanan,
            'inovasi' => $inovasi,
            'galeri' => $galeri,
            'pengumuman' => $pengumuman
        ]);
    }

    public function inovasi()
    {
        $pengumuman = Pengumuman::all();

        return view('pages.inovasi.inovasi-all', [
            'pengumuman' => $pengumuman
        ]);
    }

    public function galeri()
    {
        $pengumuman = Pengumuman::all();

        return view('pages.galeri.galeri-all', [
            'pengumuman' => $pengumuman
        ]);
    }

    public function pelayanan()
    {
        $pengumuman = Pengumuman::all();

        return view('pages.pelayanan.pelayanan-all', [
            'pengumuman' => $pengumuman
        ]);
    }

    public function cekPengaduan()
    {
        $pengumuman = Pengumuman::all();

        return view('pages.pengaduan.cek-status', [
            'pengumuman' => $pengumuman
        ]);
    }

    public function berita()
    {
        $pengumuman = Pengumuman::all();

        return view('pages.berita.berita-all', [
            'pengumuman' => $pengumuman
        ]);
    }
}
