<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        $id = \App\Banner::all()->last()->id;
        $id++;

        $input=$request->all();
        $files=$request->file('gambar');
        $ext = pathinfo($files->getClientOriginalName(), PATHINFO_EXTENSION);
        $files->move('frontend/img/banner/', "banner-".$id.".".$ext);
        
        $banner = new \App\Banner;
        $banner->judul = $input["judul"];
        $banner->deskripsi = $input["deskripsi"];
        $banner->gambar = "frontend/img/banner/banner-".$id.".".$ext;
        $banner->save();

        return redirect('/admin/banner')->with("Berhasil", "Banner Berhasil Ditambahkan!");
    }
}
