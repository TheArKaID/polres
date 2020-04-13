<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengaduan extends Model
{
    protected $table = 'kategori_pengaduan';
    
    protected $fillable = [
        'kategori'
    ];
}
