<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    public function matakuliah()
    {
        return $this->hasMany('App\Matakuliah');
    }

    public function mahasiswa()
    {
        return $this->hasMany('App\Mahasiswa');
    }

    public function prodi()
    {
    	return $this->belongsTo('App\Prodi', 'id_prodi');
    }
}
