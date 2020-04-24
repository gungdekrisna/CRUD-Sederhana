<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    public function matakuliah()
    {
        return $this->hasMany('App\Matakuliah');
    }

    public function mahasiswa()
    {
        return $this->hasMany('App\Mahasiswa');
    }

    public function dosen()
    {
        return $this->hasMany('App\Dosen');
    }
}
