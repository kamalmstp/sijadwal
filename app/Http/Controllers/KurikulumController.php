<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    //
    // mulai kurikulum
    public function index(){
    	return view('akademik_kurikulum.index');
    }    
    // akhir kurikulum   
}
