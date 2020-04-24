<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    public function kurikulum()
    {
    	return $this->belongsTo('App\Kurikulum', 'id_kurikulum');
    }

    public function dosen()
    {
    	return $this->belongsTo('App\Dosen', 'id_dosen');
    }

    public function prodi()
    {
    	return $this->belongsTo('App\Prodi', 'id_prodi');
    }
}
