<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Banner;
use App\Pelayanan;
use App\Inovasi;
use App\Galeri;
use App\Berita;
use App\Pengaduan;
use App\Pengumuman;
use App\Tupoksi;

class AdminController extends Controller
{
    public function admin()
    {
        return view('pages.admin.dashboard');
    }
    
    public function banner()
    {
        $banner = Banner::all();
        return view("pages.admin.banner.index", [
            'banner' => $banner
        ]);
    }

    public function tambahBanner()
    {
        return view('pages.admin.banner.create');
    }

    public function prosesTambahBanner(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png|max:5120'
        ]);
        
        
        $id = Banner::all()->last()!=NULL ? Banner::all()->last()->id : 0;
        $id++;

        $input=$request->all();
        $files=$request->file('gambar');
        $ext = pathinfo($files->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = "banner-".$id.".".$ext;
        $files->move('frontend/img/banner/', $name);
        
        $banner = new Banner;
        $banner->judul = $input["judul"];
        $banner->deskripsi = $input["deskripsi"];
        $banner->gambar = $name;
        $banner->save();

        return redirect('/admin/banner')->with("Berhasil", "Banner Berhasil Ditambahkan!");
    }

    public function editBanner(Banner $banner)
    {
        return view('pages.admin.banner.edit', compact("banner"));
    }

    public function prosesEditBanner(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $input=$request->all();
        $banner = Banner::find($input['id']);
        $banner->update($input);

        return redirect('/admin/banner')->with("Berhasil", "Banner Berhasil Diubah!");
    }

    public function prosesHapusBanner($id)
    {
        $banner = Banner::find($id);
        unlink('frontend/img/banner/'.$banner->gambar);
        $banner->delete();
        
        return redirect('/admin/banner')->with("Berhasil", "Banner Berhasil Dihapus!");
    }

    public function pelayanan()
    {       
        $pelayanan = Pelayanan::all();
        return view('pages.admin.pelayanan.index',[
            'pelayanan' => $pelayanan
        ]);
    }

    public function tambahPelayanan()
    {
        return view('pages.admin.pelayanan.create');
    }

    public function prosesTambahPelayanan(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png|max:5120'
        ]);

        $id = Pelayanan::all()->last()!=NULL ? Pelayanan::all()->last()->id : 0;
        $id++;

        $file = $request->file("gambar");
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = "pelayanan-".$id.".".$ext;
        $file->move('frontend/img/pelayanan', $name);

        $url = Str::of($request["judul"])->slug('-');
        
        $pelayanan = new Pelayanan;
        $pelayanan->judul = $request["judul"];
        $pelayanan->deskripsi = $request["deskripsi"];
        $pelayanan->gambar = $name;
        $pelayanan->url = $url;
        $pelayanan->save();

        return redirect('/admin/pelayanan')->with("Berhasil", "Pelayanan Berhasil Ditambahkan!");
    }

    public function editPelayanan(Pelayanan $pelayanan)
    {
        return view('pages.admin.pelayanan.edit', [
            "pelayanan" => $pelayanan
        ]);
    }

    public function prosesEditPelayanan(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $input=$request->all();
        

        $pelayanan = Pelayanan::find($input['id']);

        $url = Str::of($input["judul"])->slug('-');
        $pelayanan->url = $url;

        $pelayanan->update($input);

        return redirect('/admin/pelayanan')->with("Berhasil", "Pelayanan Berhasil Diubah!");
    }

    public function prosesHapusPelayanan($id)
    {
        $pelayanan = Pelayanan::find($id);
        unlink('frontend/img/pelayanan/'.$pelayanan->gambar);
        $pelayanan->delete();
        
        return redirect('/admin/pelayanan')->with("Berhasil", "Pelayanan Berhasil Dihapus!");
    }

    public function inovasi()
    {
        $inovasi = Inovasi::all();
        return view('pages.admin.inovasi.index', [
            'inovasi' => $inovasi
        ]);
    }

    public function tambahInovasi()
    {
        return view('pages.admin.inovasi.create');
    }

    public function prosesTambahInovasi(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png|max:5120'
        ]);

        $id = Inovasi::all()->last()!=NULL ? Inovasi::all()->last()->id : 0;
        $id++;

        $file = $request->file("gambar");
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = "inovasi-".$id.".".$ext;
        $file->move('frontend/img/inovasi', $name);

        $url = Str::of($request["judul"])->slug('-');
        
        $inovasi = new Inovasi;
        $inovasi->judul = $request["judul"];
        $inovasi->deskripsi = $request["deskripsi"];
        $inovasi->gambar = $name;
        $inovasi->url = $url;
        $inovasi->save();

        return redirect('/admin/inovasi')->with("Berhasil", "Inovasi Berhasil Ditambahkan!");
    }

    public function editInovasi(Inovasi $inovasi)
    {
        return view('pages.admin.inovasi.edit', [
            'inovasi' => $inovasi
        ]);
    }

    public function prosesEditInovasi(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $input=$request->all();
        
        $inovasi = Inovasi::find($input['id']);
        
        $url = Str::of($input["judul"])->slug('-');
        $inovasi->url = $url;

        $inovasi->update($input);

        return redirect('/admin/inovasi')->with("Berhasil", "Inovasi Berhasil Diubah!");
    }

    public function prosesHapusInovasi($id)
    {
        $inovasi = Inovasi::find($id);
        unlink('frontend/img/inovasi/'.$inovasi->gambar);
        $inovasi->delete();
        
        return redirect('/admin/inovasi')->with("Berhasil", "Inovasi Berhasil Dihapus!");
    }

    public function galeri()
    {
        $galeri = Galeri::all();
        return view('pages.admin.galeri.index', [
            "galeri" => $galeri
        ]);
    }

    public function tambahGaleri()
    {
        return view('pages.admin.galeri.create');
    }

    public function prosesTambahGaleri(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|mimes:jpeg,jpg,png|max:5120'
        ]);

        $id = Galeri::all()->last()!=NULL ? Galeri::all()->last()->id : 0;
        $id++;

        $file = $request->file("gambar");
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = "galeri-".$id.".".$ext;
        $file->move('frontend/img/galeri', $name);

        $galeri = new Galeri;
        $galeri->gambar = $name;
        $galeri->save();

        return redirect('/admin/galeri')->with("Berhasil", "Galeri Berhasil Ditambahkan!");
    }

    public function prosesHapusGaleri($id)
    {
        $galeri = Galeri::find($id);
        unlink('frontend/img/galeri/'.$galeri->gambar);
        $galeri->delete();
        
        return redirect('/admin/galeri')->with("Berhasil", "Galeri Berhasil Dihapus!");
    }

    public function berita()
    {
        $berita = Berita::all();
        return view('pages.admin.berita.index', [
            "berita" => $berita
        ]);
    }

    public function tambahBerita()
    {
        return view('pages.admin.berita.create');
    }

    public function prosesTambahBerita(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png|max:5120'
        ]);

        $id = Berita::all()->last()!=NULL ? Berita::all()->last()->id : 0;
        $id++;

        $file = $request->file("gambar");
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = "berita-".$id.".".$ext;
        $file->move('frontend/img/berita', $name);

        $url = Str::of($request["judul"])->slug('-');
        
        $berita = new Berita;
        $berita->judul = $request["judul"];
        $berita->deskripsi = $request["deskripsi"];
        $berita->gambar = $name;
        $berita->url = $url;
        $berita->save();

        return redirect('/admin/berita')->with("Berhasil", "Berita Berhasil Ditambahkan!");
    }

    public function editBerita(Berita $berita)
    {
        return view('pages.admin.berita.edit', [
            "berita" => $berita
        ]);
    }

    public function prosesEditBerita(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $input=$request->all();
        
        $berita = Berita::find($input['id']);
        
        $url = Str::of($input["judul"])->slug('-');
        $berita->url = $url;

        $berita->update($input);

        return redirect('/admin/berita')->with("Berhasil", "Berita Berhasil Diubah!");
    }

    public function pengaduan()
    {
        $pengaduan = Pengaduan::all();
        $kategori = \App\KategoriPengaduan::all();

        return view('pages.admin.pengaduan.index', [
            "pengaduan" => $pengaduan,
            'kategori' => $kategori
        ]);
    }

    public function tambahKategoriPengaduan()
    {
        return view('pages.admin.pengaduan.createkategori');
    }

    public function prosesTambahKategoriPengaduan(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required',
        ]);

        $kategori = new \App\KategoriPengaduan;
        $kategori->kategori = $request["kategori"];
        $kategori->save();

        return redirect('/admin/pengaduan')->with("Berhasil", "Kategori Pengaduan Berhasil Ditambahkan!");
    }

    public function hapusKategoriPengaduan($id)
    {
        $kategori = \App\KategoriPengaduan::find($id);
        $kategori->delete();
        
        return redirect('/admin/pengaduan')->with("Berhasil", "Kategori Berhasil Dihapus!");
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();

        return view('pages.admin.pengumuman.index', [
            'pengumuman' => $pengumuman
        ]);
    }

    public function tambahPengumuman()
    {
        return view('pages.admin.pengumuman.create');
    }

    public function prosesTambahPengumuman(Request $request)
    {
        $this->validate($request, [
            'pengumuman' => 'required',
        ]);

        $pengumuman = new Pengumuman;
        $pengumuman->pengumuman = $request["pengumuman"];
        $pengumuman->save();

        return redirect('/admin/pengumuman')->with("Berhasil", "Pengumuman Berhasil Ditambahkan!");
    }

    public function prosesHapusPengumuman($id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();
        
        return redirect('/admin/pengumuman')->with("Berhasil", "Pengumuman Berhasil Dihapus!");
    }

    public function polsek()
    {
        $wilayah = \App\WilayahPolsek::all();

        return view('pages.admin.polsek.index', [
            'wilayah' => $wilayah
        ]);
    }

    public function tambahWilayah()
    {
        return view('pages.admin.polsek.createwilayah');
    }

    public function prosesTambahWilayah(Request $request)
    {
        $this->validate($request, [
            'wilayah' => 'required',
        ]);

        $wilayah = new \App\WilayahPolsek;
        $wilayah->wilayah = $request["wilayah"];
        $wilayah->save();

        return redirect('/admin/polsek')->with("Berhasil", "Wilayah Polsek Berhasil Ditambahkan!");
    }

    public function hapusWilayah($id)
    {
        $wilayah = \App\WilayahPolsek::find($id);
        $wilayah->delete();
        
        return redirect('/admin/polsek')->with("Berhasil", "Wilayah Polsek Berhasil Dihapus!");
    }

    public function tambahTupoksi()
    {
        return view('pages.admin.tupoksi.create');
    }

    public function tupoksi()
    {
        $tupoksi = Tupoksi::all();
        return view('pages.admin.tupoksi.index', [
            'tupoksi' => $tupoksi
        ]);
    }
    public function prosesTambahTupoksi(Request $request)
    {
        $this->validate($request, [
            'tupoksi' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png|max:5120'
        ]);

        $url = Str::of($request["tupoksi"])->slug('-');

        $tupoksi = new Tupoksi;
        $tupoksi->tupoksi = $request["tupoksi"];
        $tupoksi->deskripsi = $request["deskripsi"];
        $tupoksi->url = $url;
        $tupoksi->save();

        $file = $request->file("gambar");
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = "tupoksi-".$tupoksi->id.".".$ext;
        $file->move('frontend/img/tupoksi', $name);

        $tupoksi->gambar = $name;
        $tupoksi->save();
        
        return redirect('/admin/tupoksi')->with("Berhasil", "Tupoksi Berhasil Ditambahkan!");
    }
}
