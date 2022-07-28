<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $table = 'jadwal';  

    protected $guarded = []; //TAMBAHKAN LINE INI

    protected $fillable = ['id_tahunajaran','id_matkul','id_waktu','id_ruangan','nama_dosen','email']; 

    
    public function matkul()
    {
        return $this->hasMany('App\matkul','id_matkul','id_matkul');
    }      
    public function waktu()
    {
        return $this->hasMany('App\waktu','kode_waktu','id_waktu');
    }
    public function ruangan()
    {
        return $this->hasMany('App\ruangan','id_ruangan','id_ruangan'); //parameter pertama key relasi di table relasi, parameter kedua key relasi di table utama
    } 
}
