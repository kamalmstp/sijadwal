<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasijadwalController extends Controller
{
    // mulai publikasijadwal
    public function publikasijadwal(){
    	return view('akademik_publikasijadwal.publikasijadwal');
    }    
    // akhir publikasijadwal
}
