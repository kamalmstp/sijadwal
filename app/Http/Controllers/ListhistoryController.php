<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\List_history;
class ListhistoryController extends Controller
{
    public function index(){
    	$list_history = List_history::orderBy('id', 'desc')->get();  

    	return view('akademik_listhistory.index', compact('list_history'));
    }    
}
