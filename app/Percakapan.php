<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Percakapan extends Model
{
    protected $table = 'percakapan';
    
    protected $fillable = [
        'pengaduan_id', 'pesan', 'isadmin'
    ];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}
