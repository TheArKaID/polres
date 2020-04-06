<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $banner = \App\Banner::all();
        return view('pages.home', [
            'banner' => $banner
        ]);
    }
}
