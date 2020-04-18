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
        $inovasi = Inovasi::paginate(4);
        
        return view('pages.inovasi.inovasi-all', [
            'pengumuman' => $pengumuman,
            'inovasi' =>$inovasi
        ]);
    }

    public function inovasiOne($url)
    {
        $inovasi = Inovasi::where("url", $url)->first();
        if($inovasi==null){
            return redirect('/inovasi/inovasi-all');
        }
        
        return view('pages.inovasi.inovasi-one',[
            'inovasi' => $inovasi
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
        $pelayanan = Pelayanan::all();

        return view('pages.pelayanan.pelayanan-all', [
            'pelayanan' => $pelayanan,
            'pengumuman' => $pengumuman
        ]);
    }

    public function pelayananOne($url)
    {
        $pelayanan = Pelayanan::where("url", $url)->first();
        if($pelayanan==null){
            return redirect('/pelayanan/pelayanan-all');
        }
        
        return view('pages.pelayanan.pelayanan-one', [
            'pelayanan' => $pelayanan
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

    public function pengaduan()
    {
        $pengumuman = Pengumuman::all();

        return view('pages.pengaduan.pengaduan', [
            'pengumuman' => $pengumuman
        ]);
    }
}
