<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function banner()
    {
        $banner = \App\banner::all();
        return view("pages.admin.banner.index",[
            'banner' => $banner
        ]);
    }
}
