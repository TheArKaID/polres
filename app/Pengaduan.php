<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    
    protected $fillable = [
        'nama', 'email', 'notelpon', 'kategori_id', 'jeniskelamin', 'penjelasan', 'status'
    ];
}
