<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table ='mahasiswa';
    protected $fillable = [ 
        'nama_lengkap',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_hp',
        'email',
        'prodi_id',
        'foto',
        'kelompok_id',
        'role_id'
    ];

    public function prodi()
    {
        return $this->belongsTo('App\Prodi');
    }

    public function kelompok()
    {
        return $this->belongsTo('App\Kelompok');    
    }

    // public function kelompok()
    // {
    //     return $this->hasMany('App\Kelompok');
    // }
}
