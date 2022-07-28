<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisasi;
class MahasiswaController extends Controller
{
    // mulai mahasiswa
    public function index(){
    	$mahasiswa = Organisasi::orderBy('created_at', 'desc')->orderBy('organisasi', 'asc')->get();  
    	return view('akademik_mahasiswa.index', compact('mahasiswa'));
    }    

    public function tambahmahasiswa()
    {
      	return view('akademik_mahasiswa.tambahmahasiswa');
    }

    public function simpanmahasiswa(Request $request)
    {
    	$input = $request->all();
    	Organisasi::create($input);
    	return redirect('/akademik/mahasiswa')->with('flash_message',
             'Data Organisasi Berhasil Disimpan.');
	}

	public function editmahasiswa($id)
	{
	    $editmahasiswa = Organisasi::find($id);       
		return view('akademik_mahasiswa.editmahasiswa', compact('editmahasiswa'));
	} 

	public function updatemahasiswa(Request $request, $id)
	{

	$mahasiswa = Organisasi::find($id);
	$input = $request->all();   
	$mahasiswa->update($input);  
	    return redirect()->route('mahasiswa')
	        ->with('flash_message',
	         'Organisasi Berhasil Diubah.');

	}

	public function deletemahasiswa($id)
	{
	$mahasiswa = Organisasi::find($id);     
	$mahasiswa->delete();  
	return redirect()->route('mahasiswa')
	    ->with('flash_message',
	     'Data Berhasil dihapuskan.');
	} 
    // akhir mahasiswa  
}
