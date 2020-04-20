<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Pelayanan;
use App\Inovasi;
use App\Galeri;
use App\Pengumuman;
use App\Berita;
use App\KategoriPengaduan;
use App\Pengaduan;
use App\Tupoksi;

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
        $berita = Berita::paginate(5);

        return view('pages.berita.berita-all', [
            'berita' => $berita
        ]);
    }

    public function beritaOne($url)
    {
        $berita = Berita::where("url", $url)->first();
        if($berita==null){
            return redirect('/berita/berita-all');
        }
        
        return view('pages.berita.berita-one', [
            'berita' => $berita
        ]);
    }

    public function pengaduan()
    {
        $pengumuman = Pengumuman::all();
        $kategori = KategoriPengaduan::all();

        return view('pages.pengaduan.pengaduan', [
            'pengumuman' => $pengumuman,
            'kategori' => $kategori
        ]);
    }

    public function laporPengaduan(Request $request)
    {
        $laporan = new Pengaduan;
        $laporan->nama = $request['name'];
        $laporan->email = $request['email'];
        $laporan->notelpon = $request['phone'];
        $laporan->kategori_id = $request['category'];
        $laporan->jeniskelamin = $request['gender'];
        $laporan->penjelasan = $request['comment'];
        $laporan->status = "Menunggu";
        $laporan->save();

        return redirect('/pengaduan')->with("Berhasil", "Pengaduan Berhasil Dilaporkan!");
    }

    public function tupoksi($key = null)
    {
        $tupoksi = Tupoksi::all();
        if($key!='2114')
            return view('pages.tupoksi.index', ['tupoksi' => $tupoksi]);
        else
            return view('pages.admin.tupoksi.index', ['tupoksi' => $tupoksi, 'key' => $key]);
    }

    public function tupoksiOne($url, $key=null, $act=null)
    {
        $tupoksi = Tupoksi::where('url', $url)->first();
        if($act=='r')
            $tupoksi->delete();
        if($key!='2114')
            return view('pages.tupoksi.detail', ['tupoksi' => $tupoksi]);
        else
            return view('pages.admin.tupoksi.edit', ['tupoksi' => $tupoksi, 'key' => $key]);
    }
}
