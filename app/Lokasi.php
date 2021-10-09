<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table ='lokasi';
    protected $fillable = [ 
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kelurahan'
    ];

    public function kelompok()
    {
        return $this->hasOne('App\Kelompok');
    }
}
