<?php

function settings()
{
    $setting = \App\Setting::first();
    return $setting;
}
?>