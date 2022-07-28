<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    //
    protected $table = 'tb_hari';
    public $fillable = ['kode_hari','nama_hari'];
	protected $primaryKey = "kode_hari";	
    public function waktu()
    {
        return $this->belongsTo('App\Waktu','kode_hari');
    } 
}
