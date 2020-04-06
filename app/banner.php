<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table = 'banner';
    
    protected $fillable = [
        'judul', 'deskripsi', 'gambar'
    ];
}
