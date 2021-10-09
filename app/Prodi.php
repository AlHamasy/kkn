<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table ='prodi';
    protected $fillable = ['nama_prodi','fakultas_id'];
    

    public function fakultas()
    {
        return $this->belongsTo('App\Fakultas');
    }

    public function dosen()
    {
        return $this->hasMany('App\Dosen');
    }
}
