<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    //
    protected $table = "matkul";

	protected $primaryKey = "id_matkul";	

	protected $fillable = ['id_prodi','kode_matkul','nama_matkul', 'sks','semester','kelas']; 

    public function prodi()
    {
        return $this->hasMany('App\Prodi','id_prodi','id_prodi'); //parameter pertama key relasi di table relasi, parameter kedua key relasi di table utama
    }    

    public function jadwal()
    {
        return $this->belongsTo('App\jadwal','id_jadwal');
    }  
}
