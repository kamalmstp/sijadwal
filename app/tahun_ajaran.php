<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tahun_ajaran extends Model
{
    //
    	protected $table = "tahun_ajaran";

	protected $primaryKey = "id_tahunajaran";	

	protected $fillable = ['tahun_ajaran','semester'];
}
