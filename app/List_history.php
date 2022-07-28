<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_history extends Model
{
	protected $table = "list_history";

	protected $fillable = ['keterangan','waktu']; 
  
}
