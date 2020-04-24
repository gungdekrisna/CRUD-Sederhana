<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    public function matakuliah()
    {
        return $this->hasMany('App\Matakuliah');
    }
}
