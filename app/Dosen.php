<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{

    protected $table ='dosen';
    protected $fillable = [ 
        'nidn',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_hp',
        'email',
        'prodi_id',
        'pendidikan_terakhir',
        'foto',
        'role_id'
    ];

    public function prodi()
    {
        return $this->belongsTo('App\Prodi');
    }

    public function kelompok()
    {
        return $this->hasMany('App\Kelompok');
    }
}
