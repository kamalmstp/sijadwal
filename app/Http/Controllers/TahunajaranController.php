<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tahun_ajaran;
use DB;
class TahunajaranController extends Controller
{
 
	//awal admin tahun ajaran
	public function index()
	{
		  $tahun_ajaran = tahun_ajaran::orderBy('id_tahunajaran', 'asc')->get();
		  $name = "tahunajaran";
		  $title = "Tahun Ajaran";
		return view('akademik_tahunajaran.index', compact('tahun_ajaran', 'name', 'title'));
	}

	public function tambahtahun_ajaran()
	{

	return view('akademik_tahunajaran.tambahtahun_ajaran');
	}

	public function simpantahun_ajaran(Request $request)
	{
	$input = $request->all();
	    $a = $request->input('tahun_ajaran1');
	    $a2 = $request->input('tahun_ajaran2');        
	    $b = $request->input('semester');

// 	$tahunajaran = Db::select(
// 	      "SELECT *
// 	        FROM  tahun_ajaran "
// 	);
// 	$c = array();
// 	$e = array();
// 	$f= "$a/$a2";
// 	foreach ($tahunajaran as  $rg) {
// 	   $c[] = $rg->tahun_ajaran ;
// 	   $e[] = $rg->semester ;
// 	}

// 	if ( in_array($f, $c) and in_array($b, $e) ) {
	   
// 	  return redirect('/akademik/tahunajaran')->with('flash_message',
// 	           'GAGAL, Data Tidak Boleh Sama');
// 	}
// 	else{
// 	  $ta= DB::insert("INSERT INTO tahun_ajaran (tahun_ajaran, semester)
// 	  VALUES ('$a' '/' '$a2', '$b')");      

// 	  return redirect('/akademik/tahunajaran')->with('flash_message',
// 	           'Tahun Ajaran Berhasil Disimpan.');
// 	}
	
	$ta= DB::insert("INSERT INTO tahun_ajaran (tahun_ajaran, semester)
	  VALUES ('$a' '/' '$a2', '$b')");      

	  return redirect('/akademik/tahunajaran')->with('flash_message',
	           'Tahun Ajaran Berhasil Disimpan.');

	}

	public function edittahun_ajaran($id_tahunajaran)
	{         
	    $edittahun_ajaran = tahun_ajaran::find($id_tahunajaran);
	    $a = $edittahun_ajaran->tahun_ajaran;
	return view('akademik_tahunajaran.edittahun_ajaran', compact('edittahun_ajaran'));
	} 

	public function updatetahun_ajaran(Request $request, $id_tahunajaran)
	{
	$tahun_ajaran = tahun_ajaran::find($id_tahunajaran);
	$input = $request->all();
	    $a = $request->input('tahun_ajaran1');
	    $a2 = $request->input('tahun_ajaran2');        
	    $b = $request->input('semester');

	$c = $tahun_ajaran->tahun_ajaran;
	$e = $tahun_ajaran->semester;
	$f= $a.'/'.$a2;

	if ( $f == $c and $b == $e ) {
	   
	  return redirect('/akademik/tahunajaran')->with('flash_message',
	           'GAGAL, Data Tidak Boleh Sama');
	}
	else{
	  $ta= Db::update("UPDATE tahun_ajaran
	  SET tahun_ajaran = '$a' '/' '$a2', semester = '$b'
	  WHERE id_tahunajaran=$id_tahunajaran");          

	  return redirect('/akademik/tahunajaran')->with('flash_message',
	           'Tahun Ajaran Berhasil Diubah.');
	}

	}

	public function hapustahun_ajaran($id_tahunajaran)
	{
	$tahun_ajaran = tahun_ajaran::find($id_tahunajaran);
	    return view('akademik_tahunajaran.tampildeletetahun_ajaran', compact('tahun_ajaran'));
	} 

	public function deletetahun_ajaran($id_tahunajaran)
	{
	$tahun_ajaran = tahun_ajaran::find($id_tahunajaran);
	$tahun_ajaran->delete();


	return redirect('/akademik/tahunajaran')->with('flash_message',
	         'Tahun Ajaran Berhasil Dihapus.');
	}     
	//akhir admin tahun ajaran
}
