<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Matkul;
use App\Prodi;
use App\Dosen;
use App\Jadwal;
use App\Hasil;
use App\Hari;
use App\Jam;
use App\Waktu;
use App\Berita;
use App\tahun_ajaran;
use Auth;
use DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
class ProdiController extends Controller
{
    // mulai prodi
    public function index(){
    	$prodi = Prodi::orderBy('created_at', 'desc')->orderBy('nama_prodi', 'asc')->get();  
    	return view('akademik_prodi.index', compact('prodi'));
    }    

    public function tambahprodi()
    {
      return view('akademik_prodi.tambahprodi');
    }

    public function simpanprodi(Request $request)
    {
    $input = $request->all();
    Prodi::create($input);
    return redirect('/akademik/prodi')->with('flash_message',
             'Data Prodi Berhasil Disimpan.');
	}

	public function editprodi($id_prodi)
	{
	    $editprodi = Prodi::find($id_prodi);       
	return view('akademik_prodi.editprodi', compact('editprodi'));
	} 

	public function updateprodi(Request $request, $id_prodi)
	{

	$prodi = Prodi::find($id_prodi);
	$input = $request->all();   
	$prodi->update($input);  


	    return redirect()->route('prodi')
	        ->with('flash_message',
	         'Prodi Berhasil Diubah.');

	}

	public function deleteprodi($id_prodi)
	{
	$prodi = Prodi::find($id_prodi);     
	$prodi->delete();  
	return redirect()->route('prodi')
	    ->with('flash_message',
	     'Data Berhasil dihapuskan.');
	} 

    // akhir prodi    
}
