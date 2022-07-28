<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisasi;
use App\Mahasiswa;
use App\ruangan;
use App\Jam;
class PemesananruangkosongController extends Controller
{
    // mulai mahasiswa
    public function index(){
        $mahasiswa = Mahasiswa::orderBy('created_at', 'desc')->get();
        $organisasi = Organisasi::orderBy('created_at', 'desc')->get();
    	return view('akademik_pemesananruangkosong.index', compact('mahasiswa','organisasi'));
    }    

    public function tambahpemesanan_ruangan_kosong()
    {
	    $organisasi = Organisasi::orderBy('created_at', 'desc')->get();    
        $ruangan = ruangan::orderBy('created_at', 'asc')->get();
        $jam = Jam::orderBy('created_at', 'asc')->get();    	
      	return view('akademik_pemesananruangkosong.tambahpemesananruangkosong', compact('organisasi','ruangan','jam'));
    }

    public function simpanpemesanan_ruangan_kosong(Request $request)
    {
    	$input = $request->all();

        $this->validate($request, [
        'asal_organisasi'=>'required',
        'nama_penanggung_jawab'=>'required',
        'kontak'=>'required',
        'email'=>'required',
        'ruangan'=>'required',
        'tanggal'=>'required',
        'dari'=>'required',
        'sampai'=>'required',
        'keterangan'=>'required',
        ]);   
        $mahasiswaaa = Mahasiswa::orderBy('created_at', 'desc')->get();
        foreach($mahasiswaaa as $mhs){
            if(($request->input('ruangan') == $mhs->ruangan) && ($request->input('tanggal') == $mhs->tanggal) && ($request->input('dari') == $mhs->dari)){
        return redirect('/akademik/pemesanan_ruangan_kosong')->with('flash_message',
             'Gagal Karena Sudah Ada Yang Melakukan Pemesanan Terlebih Dahulu.');
            } 
        } 
    	
    	Mahasiswa::create($input);
    	return redirect('/akademik/pemesanan_ruangan_kosong')->with('flash_message',
             'Data Pemesanan Ruangan Kosong Berhasil Disimpan.');
	}

	public function editpemesanan_ruangan_kosong($id)
	{
	    $editmahasiswa = Mahasiswa::find($id);   
	    $organisasi = Organisasi::orderBy('created_at', 'desc')->get();    
        $ruangan = ruangan::orderBy('created_at', 'asc')->get();
        $jam = Jam::orderBy('created_at', 'asc')->get();	    
		return view('akademik_pemesananruangkosong.editpemesananruangkosong', compact('editmahasiswa','organisasi','ruangan','jam'));
	} 

	public function updatepemesanan_ruangan_kosong(Request $request, $id)
	{

	$mahasiswa = Mahasiswa::find($id);
        $input = $request->all();
        $this->validate($request, [
        'asal_organisasi'=>'required',
        'nama_penanggung_jawab'=>'required',
        'kontak'=>'required',
        'email'=>'required',
        'ruangan'=>'required',
        'tanggal'=>'required',
        'dari'=>'required',
        'sampai'=>'required',
        'keterangan'=>'required',
        ]);   
        $mahasiswaaa = Mahasiswa::orderBy('created_at', 'desc')->get();
        foreach($mahasiswaaa as $mhs){
            if(($request->input('ruangan') == $mhs->ruangan) && ($request->input('tanggal') == $mhs->tanggal) && ($request->input('dari') == $mhs->dari)){
        return redirect('/akademik/pemesanan_ruangan_kosong')->with('flash_message',
             'Gagal Karena Sudah Ada Yang Melakukan Pemesanan Terlebih Dahulu.');
            } 
        }   
		$mahasiswa->update($input);  
	    return redirect()->route('pemesanan_ruangan_kosong')
	        ->with('flash_message',
	         'Organisasi Berhasil Diubah.');

	}

	public function deletepemesanan_ruangan_kosong($id)
	{
	$mahasiswa = Mahasiswa::find($id);     
	$mahasiswa->delete();  
	return redirect()->route('pemesanan_ruangan_kosong')
	    ->with('flash_message',
	     'Data Berhasil dihapuskan.');
	} 
    // akhir mahasiswa 
}
