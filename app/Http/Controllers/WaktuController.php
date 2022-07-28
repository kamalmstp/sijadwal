<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hari;
use App\Jam;
use App\Waktu;
use DB;
class WaktuController extends Controller
{
    // mulai hari
    public function hari(){
        $hari = Hari::orderBy('created_at', 'asc')->get();
    	return view('akademik_waktu.hari', compact('hari'));
    }    

    public function tambahhari()
    {
    return view('akademik_waktu.tambahhari');
    }

    public function simpanhari(Request $request)
    {
    $input = $request->all();
    Hari::create($input);
    return redirect('/akademik/hari')->with('flash_message',
             'Data hari Berhasil Disimpan.');
    }

    public function edithari($kode_hari)
    {         
    $edithari = Hari::find($kode_hari);
    return view('akademik_waktu.edithari', compact('edithari'));
    } 

    public function updatehari(Request $request, $kode_hari)
    {
    $hari = Hari::find($kode_hari);
    $input = $request->all();   
    $hari->update($input);  

    return redirect('/akademik/hari')->with('flash_message',
             'Data hari Berhasil Diubah.');

    }

    public function deletehari($kode_hari)
    {
    $hari = Hari::find($kode_hari);
    $hari->delete();
    return redirect('/akademik/hari')->with('flash_message',
             'Data hari Berhasil Dihapus.');
    } 
    // akhir hari  

    // mulai jam
    public function jam(){
    $jam = Jam::orderBy('created_at', 'asc')->get();
    return view('akademik_waktu.jam', compact('jam'));
    }    

    public function tambahjam()
    {
    return view('akademik_waktu.tambahjam');
    }

    public function simpanjam(Request $request)
    {
    $input = $request->all();
    Jam::create($input);
    return redirect('/akademik/jam')->with('flash_message',
             'Data jam Berhasil Disimpan.');
    }

    public function editjam($kode_jam)
    {         
    $editjam = Jam::find($kode_jam);
    return view('akademik_waktu.editjam', compact('editjam'));
    } 

    public function updatejam(Request $request, $kode_jam)
    {
    $jam = Jam::find($kode_jam);
    $input = $request->all();   
    $jam->update($input);  

    return redirect('/akademik/jam')->with('flash_message',
             'Data jam Berhasil Diubah.');
    }

    public function hapusjam($kode_jam)
    {
    $jam = Jam::find($kode_jam);
    return view('akademik_waktu.tampildeletejam', compact('jam'));
    } 

    public function deletejam($kode_jam)
    {
    $jam = Jam::find($kode_jam);
    $jam->delete();

    return redirect('/akademik/jam')->with('flash_message',
             'Data jam Berhasil Dihapus.');
    }  

    // akhir jam  

    // mulai waktu
    public function waktu(){
    $waktu = DB::select('SELECT w.`kode_waktu`, w.`kode_hari`, w.`kode_jam`, h.`nama_hari`, j.`nama_jam`
        FROM tb_waktu w INNER JOIN tb_hari h ON h.`kode_hari`=w.`kode_hari` INNER JOIN tb_jam j ON j.`kode_jam`=w.`kode_jam`
        ORDER BY w.`kode_waktu`'); 
    	return view('akademik_waktu.waktu', compact('waktu'));
    }    

    public function tambahwaktu()
    {
    $hari = Hari::orderBy('created_at', 'asc')->get();
    $jam = Jam::orderBy('created_at', 'asc')->get();
    return view('akademik_waktu.tambahwaktu',compact('hari','jam'));
    }

    public function simpanwaktu(Request $request)
    {
    $input = $request->all();
    Waktu::create($input);
    return redirect('/akademik/waktu')->with('flash_message',
             'waktu Berhasil Disimpan.');
    }

    public function editwaktu($kode_waktu)
    {         
    $editwaktu = Waktu::find($kode_waktu);

    $edithari = Hari::find($editwaktu->kode_hari);
    $editjam = Jam::find($editwaktu->kode_jam);
    $hari = Hari::orderBy('created_at', 'asc')->get();
    $jam = Jam::orderBy('created_at', 'asc')->get();        
    return view('akademik_waktu.editwaktu', compact('editwaktu','edithari','editjam','hari','jam'));
    } 

    public function updatewaktu(Request $request, $kode_waktu)
    {
    $waktu = Waktu::find($kode_waktu);
    $input = $request->all();   
    $waktu->update($input);  

    return redirect('/akademik/waktu')->with('flash_message',
             'waktu Berhasil Diubah.');

    }

    public function deletewaktu($kode_waktu)
    {
    $waktu = Waktu::find($kode_waktu);
    $waktu->delete();

    return redirect('/akademik/waktu')->with('flash_message',
             'waktu Berhasil Dihapus.');
    }     

    // akhir waktu          
}
