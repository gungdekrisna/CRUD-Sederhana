<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    public function dosen()
    {
        return $this->belongsTo('App\Dosen', 'id_pa');
    }

    public function prodi()
    {
        return $this->belongsTo('App\Prodi', 'id_prodi');
    }
}
