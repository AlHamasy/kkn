<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    protected $table ='kelompok';
    protected $fillable = [
        'nama_kelompok',
        'dosen_id',
        'lokasi_id'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }

    public function dosen()
    {
        return $this->belongsTo('App\Dosen');
    }

    public function lokasi()
    {
        return $this->belongsTo('App\Lokasi');
    }

    public function kegiatan()
    {
        return $this->hasMany('App\Kegiatan');
    }
}
