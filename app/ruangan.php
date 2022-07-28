<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    //
	protected $table = "ruangan";

	protected $primaryKey = "id_ruangan";

	protected $fillable = ['koderuangan','nama_ruangan','kapasitas_ruangan'];  

    public function hasil()
    {
        return $this->belongsTo('App\Hasil','id_jadwal');
    }
}
