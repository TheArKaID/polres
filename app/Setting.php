<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';
    
    protected $fillable = [
        'namapolres', 'jargon', 'notelpon', 'alamat', 'logo', 'favicon', 'background', 'instagram', 'facebook', 'twitter'
    ];
}
