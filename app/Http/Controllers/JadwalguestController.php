<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tahun_ajaran;
use App\Jadwalguest;
use DB; 
class JadwalguestController extends Controller
{
    // mulai jadwalguest
    public function jadwalguest(){
        $tahun_ajaran = tahun_ajaran::orderBy('id_tahunajaran', 'asc')->get(); 
        $taguest = Jadwalguest::orderBy('id_tahunajaran', 'asc')->get();
        $jmltaguest = count($taguest);    	
        if($jmltaguest > 0){
        	$jadwalguest = Jadwalguest::orderBy('id_tahunajaran', 'asc')->first();
        	$tahun_ajaran_guest = tahun_ajaran::where('id_tahunajaran', $jadwalguest->id_tahunajaran)->first();
        	return view('akademik_jadwalguest.jadwalguest', compact('tahun_ajaran','jmltaguest','tahun_ajaran_guest','jadwalguest'));
        }else{
        	return view('akademik_jadwalguest.jadwalguest', compact('tahun_ajaran','jmltaguest'));
        }
    	
    }    

	public function simpanjadwalguest(Request $request)
	{
		$input = $request->all();
		Jadwalguest::create($input);
	  	return redirect()->route('jadwalguest')->with('flash_message','Data Behasil Disimpan.');
	}

    public function updatejadwalguest(Request $request)
    {
        $input = $request->all();
        $a = $input['id_tahunajaran'];
        $b = $input['tgl_berlaku'];
        $c = $input['tgl_ttd'];
        $d = $input['dekan'];
        $e = $input['nip_dekan'];
      	$jg= Db::select("UPDATE jadwalguest SET id_tahunajaran = $a, tgl_berlaku = '$b', tgl_ttd = '$c', dekan = '$d', nip_dekan = '$e' WHERE id = 1"); 
      	return redirect()->route('jadwalguest')->with('flash_message','Data Behasil Diubah.');
    } 
    // akhir jadwalguest 
}
