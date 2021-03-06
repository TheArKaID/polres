<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Pelayanan;
use App\Inovasi;
use App\Galeri;
use App\Berita;
use App\Pengaduan;
use App\Pengumuman;
use App\Tupoksi;
use App\Personil;
use App\Setting;
use App\Polsek;
use App\WilayahPolsek;
use App\Percakapan;

class AdminController extends Controller
{
    public function admin()
    {
        return $this->dashboard();
    }

    function dashboard()
    {
        $banner = Banner::all()->count();
        $pelayanan = Pelayanan::all()->count();
        $inovasi = Inovasi::all()->count();
        $galeri = Galeri::all()->count();
        $berita = Berita::all()->count();
        $pengaduan = Pengaduan::all()->count();

        runDashboard();
        return view('pages.admin.dashboard', [
            'banner' => $banner,
            'pelayanan' => $pelayanan,
            'inovasi' => $inovasi,
            'galeri' => $galeri,
            'berita' => $berita,
            'pengaduan' => $pengaduan
        ]);
    }

    public function repassword()
    {
        $existtoken = \DB::table('password_resets')->where('email', \Auth::user()->email)->first();
        
        if($existtoken==null){
            \DB::table('password_resets')->insert([
                'email' => \Auth::user()->email,
                'token' => \Str::random(60)
            ]);
            $existtoken = \DB::table('password_resets')->where('email', \Auth::user()->email)->first();
        }

        return view("pages.admin.repassword");
    }

    public function resetpassword(Request $request)
    {
        $this->validate($request, [
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'renewpassword' => 'required'
        ]);

        $existtoken = \DB::table('password_resets')->where('email', \Auth::user()->email)->first();
        if($existtoken==null){
            return redirect()->back()->withErrors('Koneksi Gagal');;
        }

        $checkPass = password_verify($request->oldpassword, \Auth::user()->password);
        if(!$checkPass){
            return redirect()->back()->withErrors('Gagal, Password Anda Salah');
        }

        if($request->newpassword!=$request->renewpassword){
            return redirect()->back()->withErrors('Password Baru Tidak Sama');
        }

        $user = \App\User::where('email', \Auth::user()->email)->first();
        $user->password = \Hash::make($request->newpassword);
        $user->save();

        return redirect()->back()->with('Berhasil', "Password Anda telah Diganti");
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

    public function prosesHapusBerita($id)
    {
        $berita = Berita::find($id);
        unlink('frontend/img/berita/'.$berita->gambar);
        $berita->delete();
        
        return redirect('/admin/berita')->with("Berhasil", "Berita Berhasil Dihapus!");
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

    public function balasPengaduan(Pengaduan $pengaduan)
    {
        $pengaduan->isseen = 1;
        $pengaduan->save();

        $percakapan = Percakapan::where('isseen', 0)->where('pengaduan_id', $pengaduan->id)->get();
        
        foreach ($percakapan as $p) {
            $p = Percakapan::find($p->id);
            $p->isseen = 1;
            $p->save();
        }
        return view('pages.admin.pengaduan.balas', [
            'pengaduan' => $pengaduan
        ]);
    }

    public function prosesBalasPengaduan(Request $request)
    {
        $percakapan = new Percakapan;
        $percakapan->pengaduan_id = $request->pengaduanid;
        $percakapan->pesan = $request->pesan;
        $percakapan->isadmin = 1;
        $percakapan->isseen = 1;
        $percakapan->save();
    }

    public function prosesStatusPengaduan(Request $request)
    {
        $pengaduan = Pengaduan::find($request->id);
        $pengaduan->status = $request->value;
        $pengaduan->save();
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
        $polsek = Polsek::all();
        $wilayah = WilayahPolsek::all();

        return view('pages.admin.polsek.index', [
            'polsek' => $polsek,
            'wilayah' => $wilayah
        ]);
    }

    public function tambahPolsek()
    {
        $wilayah = WilayahPolsek::all();
        return view('pages.admin.polsek.create', [
            'wilayah' => $wilayah
        ]);
    }

    public function prosesTambahPolsek(Request $request)
    {
        $this->validate($request, [
            'namapolsek' => 'required',
            'kapolsek' => 'required',
            'alamat' => 'required',
            'wilayah' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png|max:5120',
            'fotokapolsek' => 'required|mimes:jpeg,jpg,png|max:5120'
        ]);

        $url = Str::of($request["namapolsek"])->slug('-');

        $polsek = new Polsek;
        $polsek->namapolsek = $request["namapolsek"];
        $polsek->kapolsek = $request["kapolsek"];
        $polsek->alamat = $request["alamat"];
        $polsek->wilayah_id = $request['wilayah'];
        $polsek->keterangan = $request['keterangan'];
        $polsek->notelpon = $request["notelpon"]!=NULL ? $request["notelpon"] : "";
        $polsek->email = $request["email"]!=NULL ? $request["email"] : "";
        $polsek->facebook = $request["facebook"]!=NULL ? $request["facebook"] : "";
        $polsek->instagram = $request["instagram"]!=NULL ? $request["instagram"] : "";
        $polsek->twitter = $request["twitter"]!=NULL ? $request["twitter"] : "";

        $polsek->gambar = "";
        $polsek->fotokapolsek = "";
        $polsek->url = $url;
        $polsek->save();

        $file = $request->file("gambar");
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = "polsek-".$polsek->id.".".$ext;
        $file->move('frontend/img/polsek', $name);
        $polsek->gambar = $name;
        
        $file = $request->file("fotokapolsek");
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $fotokapolsek = "kapolsek-".$polsek->id.".".$ext;
        $file->move('frontend/img/polsek', $fotokapolsek);
        $polsek->fotokapolsek = $fotokapolsek;

        $polsek->save();
        
        return redirect('/admin/polsek')->with("Berhasil", "Polsek Berhasil Ditambahkan!");
    }

    public function editPolsek(Polsek $polsek)
    {
        $wilayah = WilayahPolsek::all();
        return view('pages.admin.polsek.edit', [
            'polsek' => $polsek,
            'wilayah' => $wilayah
        ]);
    }

    public function prosesEditPolsek(Request $request)
    {
        $this->validate($request,[
            'namapolsek' => 'required',
            'alamat' => 'required',
            'kapolsek' => 'required',
            'gambar' => 'mimes:jpeg,jpg,png|max:5120',
            'fotokapolsek' => 'mimes:jpeg,jpg,png|max:5120'
        ]);

        $input=$request->all();
        
        $polsek = Polsek::find($input['id']);
        
        $url = Str::of($input["namapolsek"])->slug('-');
        $polsek->url = $url;

        if($request->file("gambar")!=NULL){
            $file = $request->file("gambar");
            $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $name = "polsek-".$polsek->id.".".$ext;
            $file->move('frontend/img/polsek', $name);
            $polsek->gambar = $name;
        }
        
        if($request->file("fotokapolsek")!=NULL){
            $file = $request->file("fotokapolsek");
            $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $name = "kapolsek-".$polsek->id.".".$ext;
            $file->move('frontend/img/polsek', $name);
            $polsek->fotokapolsek = $name;
        }
        $polsek->update($input);

        return redirect('/admin/polsek')->with("Berhasil", "Polsek Berhasil Diubah!");
    }

    public function prosesHapusPolsek($id)
    {
        $polsek = Polsek::find($id);
        unlink("frontend/img/polsek/".$polsek->gambar);
        $polsek->delete();
        
        return redirect('/admin/polsek')->with("Berhasil", "Polsek Berhasil Dihapus!");
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

        $wilayah = new WilayahPolsek;
        $wilayah->wilayah = $request["wilayah"];
        $wilayah->save();

        return redirect('/admin/polsek')->with("Berhasil", "Wilayah Polsek Berhasil Ditambahkan!");
    }

    public function hapusWilayah($id)
    {
        $wilayah = WilayahPolsek::find($id);
        $polsek = Polsek::where('wilayah_id', $wilayah->id);

        $polsek->delete();
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

    public function editTupoksi(Tupoksi $tupoksi)
    {
        return view('pages.admin.tupoksi.edit', [
            'tupoksi' => $tupoksi
        ]);
    }

    public function prosesEditTupoksi(Request $request)
    {
        $this->validate($request,[
            'tupoksi' => 'required',
            'deskripsi' => 'required',
        ]);

        $input=$request->all();
        
        $tupoksi = Tupoksi::find($input['id']);
        
        $url = Str::of($input["tupoksi"])->slug('-');
        $tupoksi->url = $url;

        $tupoksi->update($input);

        return redirect('/admin/tupoksi')->with("Berhasil", "tupoksi Berhasil Diubah!");
    }

    public function prosesHapusTupoksi($id)
    {
        $tupoksi = Tupoksi::find($id);
        unlink('frontend/img/tupoksi/'.$tupoksi->gambar);
        $tupoksi->delete();
        
        return redirect('/admin/tupoksi')->with("Berhasil", "tupoksi Berhasil Dihapus!");
    }

    public function personil()
    {
        $personil = Personil::all();
        return view('pages.admin.personil.index', [
            'personil' => $personil
        ]);
    }

    public function tambahPersonil()
    {
        return view('pages.admin.personil.create');
    }

    public function prosesTambahPersonil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png|max:5120'
        ]);

        $url = Str::of($request["nama"])->slug('-');

        $personil = new Personil;
        $personil->nama = $request["nama"];
        $personil->deskripsi = $request["deskripsi"];
        $personil->url = $url;
        $personil->save();

        $file = $request->file("gambar");
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = "personil-".$personil->id.".".$ext;
        $file->move('frontend/img/personil', $name);

        $personil->gambar = $name;
        $personil->save();
        
        return redirect('/admin/personil')->with("Berhasil", "Personil Berhasil Ditambahkan!");
    }

    public function editPersonil(Personil $personil)
    {
        return view('pages.admin.personil.edit', [
            'personil' => $personil
        ]);
    }

    public function prosesEditPersonil(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $input=$request->all();
        
        $personil = Personil::find($input['id']);
        
        $url = Str::of($input["nama"])->slug('-');
        $personil->url = $url;

        $personil->update($input);

        return redirect('/admin/personil')->with("Berhasil", "Personil Berhasil Diubah!");
    }

    public function prosesHapusPersonil($id)
    {
        $personil = Personil::find($id);
        unlink('frontend/img/personil/'.$personil->gambar);
        $personil->delete();
        
        return redirect('/admin/personil')->with("Berhasil", "Personil Berhasil Dihapus!");
    }

    public function setting()
    {
        $setting = Setting::first();
        return view('pages.admin.settings.index', [
            'setting' => $setting
        ]);
    }

    public function editSetting()
    {
        $setting = Setting::first();
        return view('pages.admin.settings.edit', [
            'setting' => $setting
        ]);
    }

    public function prosesEditSetting(Request $request)
    {
        $this->validate($request, [
            'namapolres' => 'required',
            'jargon' => 'required',
            'notelpon' => 'required',
            'alamat' => 'required',
            'logo' => 'mimes:jpeg,jpg,png|max:5120',
            'favicon' => 'mimes:ico|max:5120',
            'background' => 'mimes:jpeg,jpg,png|max:5120',
        ]);

        $setting = Setting::first();

        if($request->file('logo')!=NULL){
            $file = $request->file("logo");
            $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $logo = "logo.".$ext;
            $file->move('frontend/img/setting', $logo);
            $setting->logo = $logo;
        }
        
        if($request->file('favicon')!=NULL){
            $file = $request->file("favicon");
            $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $favicon = "favicon.".$ext;
            $file->move('frontend/img/setting', $favicon);
            $setting->favicon = $favicon;
        }
        
        if($request->file('background')!=NULL){
            $file = $request->file("background");
            $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $background = "background.".$ext;
            $file->move('frontend/img/setting', $background);
            $setting->background = $background;
        }
        
        $setting->namapolres = $request["namapolres"];
        $setting->jargon = $request["jargon"];
        $setting->notelpon = $request["notelpon"];
        $setting->alamat = $request["alamat"];
        $setting->facebook = $request["facebook"];
        $setting->instagram = $request["instagram"];
        $setting->twitter = $request["twitter"];
        $setting->save();

        return redirect('/admin/settings')->with("Berhasil", "Setting Berhasil Diperbarui!");
    }
}
