<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableJadwalfeb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalfeb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_tahunajaran')->unsigned();
            $table->string('prodi', 250); 
            $table->string('program', 250); 

            $table->string('kode_matkul', 50);  
            $table->string('nama_matkul', 250); 
            $table->integer('sks');  
            $table->string('kelas', 50);   
            $table->string('semester', 250); 

            $table->string('hari', 6);
            $table->time('jam');  
            $table->time('jam_selesai');     

            $table->string('ruangan', 250);       

            $table->string('dosen1', 250);   
            $table->string('dosen2', 250); 
            $table->string('dosen3', 250); 
            $table->string('dosen4', 250); 
            $table->string('dosen5', 250);             
            $table->timestamps();

            $table->foreign('id_tahunajaran')
                ->references('id_tahunajaran')
                ->on('tahun_ajaran')
                ->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwalfeb');
    }
}
