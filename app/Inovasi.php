<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inovasi extends Model
{    
    protected $table = 'inovasi';
    
    protected $fillable = [
        'judul', 'deskripsi', 'gambar'
    ];
}
