<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dekan extends Model
{
    //
	protected $table = "dekan";

	protected $primaryKey = "id";	

	protected $fillable = ['id_tahunajaran','tanggal','nama','nip'];   	    
}
