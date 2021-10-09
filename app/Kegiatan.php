<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table ='kegiatan';
    protected $fillable = ['nama_kegiatan','kelompok_id'];
    
    public function kelompok()
    {
        return $this->belongsTo('App\Kelompok');
    }
}
