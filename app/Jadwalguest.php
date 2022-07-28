<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwalguest extends Model
{
    //
        protected $table = 'jadwalguest';  

    protected $fillable = ['id_tahunajaran','tgl_berlaku','tgl_ttd','dekan','nip_dekan']; 
}
