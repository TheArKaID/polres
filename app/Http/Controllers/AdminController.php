<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class AdminController extends Controller
{
    public function banner()
    {
        $banner = \App\Banner::all();
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
        
        
        $id = \App\Banner::all()->last()!=NULL ? \App\Banner::all()->last()->id : 0;
        $id++;

        $input=$request->all();
        $files=$request->file('gambar');
        $ext = pathinfo($files->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = "banner-".$id.".".$ext;
        $files->move('frontend/img/banner/', $name);
        
        $banner = new \App\Banner;
        $banner->judul = $input["judul"];
        $banner->deskripsi = $input["deskripsi"];
        $banner->gambar = $name;
        $banner->save();

        return redirect('/admin/banner')->with("Berhasil", "Banner Berhasil Ditambahkan!");
    }

    public function edit(Banner $banner)
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
        $banner = \App\Banner::find($input['id']);
        $banner->update($input);

        return redirect('/admin/banner')->with("Berhasil", "Banner Berhasil Diubah!");
    }

    public function prosesHapusBanner($id)
    {
        $banner = \App\Banner::find($id);
        unlink($banner->gambar);
        $banner->delete();
        
        return redirect('/admin/banner')->with("Berhasil", "Banner Berhasil Dihapus!");
    }

    public function pelayanan()
    {       
        $pelayanan = \App\Pelayanan::all();
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
        
        $id = \App\Pelayanan::all()->last()!=NULL ? \App\Pelayanan::all()->last()->id : 0;
        $id++;

        $file = $request->file("gambar");
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = "pelayanan-".$id.".".$ext;
        $file->move('frontend/img/pelayanan', $name);

        $pelayanan = new \App\Pelayanan;
        $pelayanan->judul = $request["judul"];
        $pelayanan->deskripsi = $request["deskripsi"];
        $pelayanan->gambar = $name;
        $pelayanan->save();

        return redirect('/admin/pelayanan')->with("Berhasil", "Pelayanan Berhasil Ditambahkan!");
    }
}
