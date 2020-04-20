<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personil extends Model
{
    protected $table = 'personil';
    
    protected $fillable = [
        'nama', 'deskripsi', 'gambar', 'url',
    ];
}
