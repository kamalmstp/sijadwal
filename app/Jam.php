<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{
    //
    protected $table = 'tb_jam';
	protected $fillable = ['kode_jam','nama_jam']; 
	protected $primaryKey = "kode_jam";
    public function waktu()
    {
        return $this->belongsTo('App\Waktu','kode_jam');
    } 
}
