<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waktu extends Model
{
    //
    protected $table = 'tb_waktu';
    protected $primaryKey = "kode_waktu";   

        public $fillable = ['kode_hari','kode_jam'];
    public function hari()
    {
        return $this->hasMany('App\Hari','kode_hari','kode_hari');
    }
    public function jam()
    {
        return $this->hasMany('App\Jam','kode_jam','kode_jam');
    }

    public function hasil()
    {
        return $this->morphMany('App\Jam', 'waktu');
    }    
    
    public function jadwal()
    {
        return $this->belongsTo('App\jadwal','id_jadwal');
    }

}
