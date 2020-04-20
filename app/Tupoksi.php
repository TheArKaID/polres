<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tupoksi extends Model
{
    protected $table = 'tupoksi';
    
    protected $fillable = [
        'tupoksi', 'deskripsi', 'gambar', 'url',
    ];
}
