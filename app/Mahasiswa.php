<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
	protected $table = "mahasiswa";

	protected $fillable = ['asal_organisasi','nama_penanggung_jawab','kontak','email','keterangan','ruangan','tanggal','dari','sampai']; 
}
