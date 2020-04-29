<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Banner;
use App\Pelayanan;
use App\Inovasi;
use App\Galeri;
use App\Pengumuman;
use App\Berita;
use App\KategoriPengaduan;
use App\Pengaduan;
use App\Tupoksi;
use App\Personil;
use App\Polsek;
use App\Comment;

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

    public function search($search)
    {
        $banner = Banner::all();
        $pelayanan = Pelayanan::where('judul', 'like', '%'.$search.'%')
            ->orWhere('deskripsi', 'like', '%'.$search.'%')->get();
        $inovasi = Inovasi::where('judul', 'like', '%'.$search.'%')
            ->orWhere('deskripsi', 'like', '%'.$search.'%')->get();
        $berita = Berita::where('judul', 'like', '%'.$search.'%')
            ->orWhere('deskripsi', 'like', '%'.$search.'%')->get();
        $tupoksi = Tupoksi::where('tupoksi', 'like', '%'.$search.'%')
            ->orWhere('deskripsi', 'like', '%'.$search.'%')->get();
        $personil = Personil::where('nama', 'like', '%'.$search.'%')->get();

        return view("pages.search", [
            "banner" => $banner,
            "keyword" => $search,
            'pelayanan' => $pelayanan,
            'inovasi' => $inovasi,
            'berita' => $berita,
            'tupoksi' => $tupoksi,
            'personil' => $personil
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
        $galeri = Galeri::all();
        return view('pages.galeri.galeri-all', [
            'galeri' => $galeri,
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
        
        $komentar = Comment::where('berita_id', $berita->id)->orderBy('id', 'desc')->get();
        
        return view('pages.berita.berita-one', [
            'berita' => $berita,
            'komentar' => $komentar
        ]);
    }

    public function beritaKomentar(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'komentar' => 'required',
        ]);

        $komentar = new Comment;
        $komentar->nama = $request['nama'];
        $komentar->email = $request['email'];
        $komentar->komentar = $request['komentar'];
        $komentar->berita_id = $request['berita_id'];
        $komentar->save();

        return redirect()->back()->with('Berhasil', "Berhasil Mengomentari");
    }

    public function pengaduan()
    {
        $pengumuman = Pengumuman::all();
        $kategori = KategoriPengaduan::all();
        $pengaduan = Pengaduan::orderBy('id', 'desc')->take(5)->get();

        return view('pages.pengaduan.pengaduan', [
            'pengumuman' => $pengumuman,
            'kategori' => $kategori,
            'pengaduan' => $pengaduan
        ]);
    }

    public function laporPengaduan(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'gender' => 'required',
            'comment' => 'required',
        ]);

        $laporan = new Pengaduan;
        $laporan->nama = $request['name'];
        $laporan->email = $request['email'];
        $laporan->notelpon = $request['phone'];
        $laporan->kategori_id = $request['category'];
        $laporan->jeniskelamin = $request['gender'];
        $laporan->penjelasan = $request['comment'];
        $laporan->status = "Menunggu";
        $laporan->kode = Str::upper(Str::random(10));
        $laporan->isseen = 0;
        $laporan->save();

        return redirect('/pengaduan')->with("Berhasil", "Pengaduan Berhasil Dilaporkan!");
    }
    
    public function cekPengaduan()
    {
        $pengumuman = Pengumuman::all();

        return view('pages.pengaduan.cek-status', [
            'pengumuman' => $pengumuman
        ]);
    }

    public function prosesCekPengaduan(Request $request)
    {
        $pengaduan = Pengaduan::where('kode', $request['kode'])->first();
        if($pengaduan==NULL)
            return redirect("/pengaduan/cek-status")->withErrors("Kode yang anda masukkan Tidak Valid");
        return view("pages.pengaduan.hasil", [
            'pengaduan' => $pengaduan
        ]);
    }

    public function prosesBalasPengaduan(Request $request)
    {
        $percakapan = new \App\Percakapan;
        $percakapan->pengaduan_id = $request->pengaduanid;
        $percakapan->pesan = $request->pesan;
        $percakapan->isadmin = 0;
        $percakapan->isseen = 0;
        $percakapan->save();
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

    public function personil()
    {
        $personil = Personil::all();
        return view('pages.personil.index', [
            'personil' => $personil
        ]);
    }

    public function personilOne($url)
    {
        $personil = Personil::where('url', $url)->first();
        return view('pages.personil.detail', [
            'personil' => $personil
        ]);
    }

    public function polsekOne($url)
    {
        $polsek = Polsek::where('url', $url)->first();
        if($polsek==NULL)
            return redirect('/');
        return view('pages.polsek.index', [
            'polsek' => $polsek
        ]);
    }
}
