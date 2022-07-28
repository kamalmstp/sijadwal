<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    //
    protected $table = 'jadwal'; 

    public function matkul()
    {
        return $this->hasMany('App\matkul','id_matkul','id_matkul');
    }

    public function waktu()
    {
        return $this->morphTo();
    }    
    public function ruangan()
    {
        return $this->hasMany('App\ruangan','id_ruangan','id_ruangan');
    }   
}
