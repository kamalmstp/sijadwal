<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
class BeritaController extends Controller
{
    // mulai berita
    public function berita(){
    	$berita = berita::orderBy('created_at', 'desc')->get();
    	return view('akademik_berita.berita', compact('berita'));
    }    

	public function tambahberita()
	{
	return view('akademik_berita.tambahberita');
	}

	public function simpanberita(Request $request)
	{
	$input = $request->all();
	Berita::create($input);
	return redirect('/akademik/berita')->with('flash_message',
	         'Berita Berhasil Disimpan.');;
	}

	public function editberita($id_berita)
	{         
	$editberita = Berita::find($id_berita);
	    
	return view('akademik_berita.editberita', compact('editberita'));
	} 

	public function updateberita(Request $request, $id_berita)
	{
	$berita = Berita::find($id_berita);
	$input = $request->all();   
	$berita->update($input);  

	return redirect('/akademik/berita')->with('flash_message',
	         'Berita Berhasil Diubah.');;

	}

	public function deleteberita($id_berita)
	{
	$berita = Berita::find($id_berita);
	$berita->delete();

	return redirect('/akademik/berita')->with('flash_message',
	         'Berita Berhasil Dihapus.');;
	}         
    // akhir berita
}
