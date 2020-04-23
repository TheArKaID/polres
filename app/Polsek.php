<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polsek extends Model
{
    protected $table = 'polsek';
    
    protected $fillable = [
        'namapolsek', 'kapolsek', 'alamat', 'notelpon', 'email', 'facebook', 'twitter', 'instagram'
    ];
}
