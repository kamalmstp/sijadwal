<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
class RuanganController extends Controller
{
    // mulai ruangan
    public function ruangan(){
    	$ruangan = ruangan::orderBy('created_at', 'asc')->get();
    	return view('akademik_ruangan.index', compact('ruangan'));
    }    

	public function tambahruangan()
	{
	return view('akademik_ruangan.tambahruangan');
	}

	public function simpanruangan(Request $request)
	{
	$input = $request->all();
	ruangan::create($input);
	return redirect('/akademik/ruangan')->with('flash_message',
	         'Data ruangan Berhasil Disimpan.');
	}

	public function editruangan($id_tahunajaran)
	{         
	$editruangan = ruangan::find($id_tahunajaran);
	return view('akademik_ruangan.editruangan', compact('editruangan'));
	} 

	public function updateruangan(Request $request, $id_tahunajaran)
	{
	$ruangan = ruangan::find($id_tahunajaran);
	$input = $request->all();   
	$ruangan->update($input);  
	return redirect('/akademik/ruangan')->with('flash_message',
	         'Data ruangan Berhasil Diubah.');
	}

	public function deleteruangan($id_tahunajaran)
	{
	$ruangan = ruangan::find($id_tahunajaran);
	$ruangan->delete();

	return redirect('/akademik/ruangan')->with('flash_message',
	         'Ruangan Berhasil Dihapus.');
	}         
    // akhir ruangan
}
