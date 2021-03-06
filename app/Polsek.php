<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polsek extends Model
{
    protected $table = 'polsek';
    
    protected $fillable = [
        'namapolsek', 'kapolsek', 'fotokapolsek', 'alamat', 'notelpon', 'email', 'wilayah_id', 'keterangan', 'url', 'facebook', 'twitter', 'instagram'
    ];
    
    public function wilayah()
    {
        return $this->belongsTo(WilayahPolsek::class);
    }
}
