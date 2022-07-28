<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
class Berita extends Model
{
    //
	protected $table = "berita";

	public function getCreatedAtAttribute()
	{
	    return Date::parse($this->attributes['created_at']);
	}

    public function getUpdatedAtAttribute()
    {
	    return Date::parse($this->attributes['updated_at']);
    }

	protected $primaryKey = "id_berita";	

	protected $fillable = ['isi','tanggal','dari','sampai'];    
}
