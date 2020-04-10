<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Pelayanan;
use App\Inovasi;

class FrontController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        $pelayanan = Pelayanan::all();
        $inovasi = Inovasi::all();

        return view('pages.home', [
            'banner' => $banner,
            'pelayanan' => $pelayanan,
            'inovasi' => $inovasi
        ]);
    }
}
