<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Pelayanan;

class AdminController extends Controller
{
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

        $pelayanan = new Pelayanan;
        $pelayanan->judul = $request["judul"];
        $pelayanan->deskripsi = $request["deskripsi"];
        $pelayanan->gambar = $name;
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
}
