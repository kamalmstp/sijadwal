<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwalfh extends Model
{
    protected $table = 'jadwalfh';  

    protected $guarded = []; //TAMBAHKAN LINE INI

    protected $fillable = ['id_tahunajaran','prodi','program','kode_matkul','nama_matkul','sks','kelas','semester','hari','jam','jam_selesai','ruangan','jumlah_mahasiswa','dosen1','dosen2','dosen3','dosen4','dosen5','dosen6']; 

    public function tahun_ajaran()
    {
        return $this->hasMany('App\tahun_ajaran','id_tahunajaran','id_tahunajaran');
    }     
}
