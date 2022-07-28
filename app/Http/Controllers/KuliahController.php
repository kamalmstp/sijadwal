<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\Matkul;
use App\Prodi;
use DB;
class KuliahController extends Controller
{
    // mulai dosen
    public function dosen(){
        $dosen = Dosen::orderBy('created_at', 'desc')->get();
    	return view('akademik_kuliah.dosen', compact('dosen'));
    }    

    public function tambahdosen()
    {
       
    return view('akademik_kuliah.tambahdosen');
    }

    public function simpandosen(Request $request)
    {

        $input = $request->all();
        //cara 1

        $dosen = new Dosen;        
        $dosen->nip_dosen = $input['nip_dosen'];
        $dosen->nama_dosen = $input['nama_dosen'];
        $dosen->email = $input['email'];                                 
        $dosen->save();        
        return redirect()->route('dosen')
            ->with('flash_message',
             'Data Dosen Berhasil Disimpan'); }

    public function editdosen($id_dosen)
    {                    
    $editdosen = Dosen::find($id_dosen);            
    return view('akademik_kuliah.editdosen', compact('editdosen'));
    } 

    public function updatedosen(Request $request, $id_dosen)
    {
        $input = $request->all();
        $dosen = Dosen::find($id_dosen); 
        $dosen->nip_dosen = $input['nip_dosen'];
        $dosen->nama_dosen = $input['nama_dosen']; 
        $dosen->email = $input['email'];         
        $dosen->update();             


        return redirect()->route('dosen')
            ->with('flash_message',
             'Data Dosen Berhasil Diubah');

    }

    public function hapusdosen($id_dosen)
    {
        $dosen = Dosen::find($id_dosen);     
        return view('akademik_kuliah.tampildeletedosen', compact('dosen'));
    } 

    public function deletedosen($id_dosen)
    {
    $dosen = Dosen::find($id_dosen);
    $dosen->delete();            
      return redirect()->route('dosen')
          ->with('flash_message',
           'Data Dosen Berhasil Dihapus');
    }

    // akhir dosen

    // mulai matakuliah
    public function matakuliah(){
        $matkul = Matkul::orderBy('nama_matkul', 'asc')->get();
    	return view('akademik_kuliah.matakuliah', compact('matkul'));
    }    

    public function tambahmatakuliah()
    {
        $prodi = Prodi::orderBy('created_at', 'desc')->get(); 
        return view('akademik_kuliah.tambahmatkul',compact('prodi'));
    }

    public function simpanmatakuliah(Request $request)
    {
        $input = $request->all();
        $a= $input['kode_matkul'];
        $b= $input['nama_matkul'];
        $d=$input['kelas'];
        $c=$input['sks'];
        if((isset($input['nama_prodi']) != "") and (isset($input['semester']) != "")){
        $kota_favorit = array();
        foreach ($input['nama_prodi'] as $kota2) {
            array_push($kota_favorit, $kota2);
        }
        $kota2 = serialize($kota_favorit);


        $semester = array();
        foreach ($input['semester'] as $semester2) {
            array_push($semester, $semester2);
        }
        $semester2 = serialize($semester);

        $query2 = DB::insert("INSERT INTO matkul (nama_prodi, kode_matkul, nama_matkul, sks, kelas, semester) VALUES ('$kota2','$a','$b','$c','$d','$semester2')"); 

        return redirect()->route('matakuliah')
        ->with('flash_message',
         'Matkul Berhasil Ditambahkan.');
        }else{
        $kota_favorit = array();

        $query2 = DB::insert("INSERT INTO matkul (nama_prodi, kode_matkul, nama_matkul, sks, kelas, semester) VALUES ('','$a','$b','$c','$d','')"); 

        return redirect()->route('matakuliah')
        ->with('flash_message',
         'Matkul Berhasil Ditambahkan.');      
        }

    }

    public function editmatakuliah($id_matkul)
    {
    $editmatkul = Matkul::find($id_matkul);
    $prodi = Prodi::orderBy('created_at', 'desc')->get(); 

    return view('akademik_kuliah.editmatkul', compact('prodi','editmatkul'));
    } 

    public function updatematakuliah(Request $request, $id_matkul)
    {
    $matkul = Matkul::find($id_matkul);

    $input = $request->all();
    $a= $input['kode_matkul'];
    $b= $input['nama_matkul'];
    $d=$input['kelas'];
    $c=$input['sks'];

    if((isset($input['nama_prodi']) != "") and (isset($input['semester']) != "")) {
    $kota_favorit = array();
    foreach ($input['nama_prodi'] as $kota2) {
      array_push($kota_favorit, $kota2);
    }
    $kota2 = serialize($kota_favorit);


    $semesters = array();
    foreach ($input['semester'] as $semester2) {
      array_push($semesters, $semester2);
    }
    $semester2 = serialize($semesters);      

    $query2 =  DB::update("UPDATE matkul SET nama_prodi = '$kota2', kode_matkul = '$a', nama_matkul = '$b', sks = '$c', kelas = '$d', semester = '$semester2' WHERE id_matkul = '$id_matkul'");

    return redirect()->route('matakuliah')
        ->with('flash_message',
         'Data Matkul Berhasil Diubah.');
    }

    elseif((isset($input['nama_prodi']) == "") and (isset($input['semester']) != "")) {

      $semesters = array();
      foreach ($input['semester'] as $semester2) {
          array_push($semesters, $semester2);
      }
      $semester2 = serialize($semesters);      

      $query2 =  DB::update("UPDATE matkul SET  kode_matkul = '$a', nama_matkul = '$b', sks = '$c', kelas = '$d', semester = '$semester2' WHERE id_matkul = '$id_matkul'");

        return redirect()->route('matakuliah')
            ->with('flash_message',
             'Data Matkul Berhasil Diubah.');
      }
    elseif((isset($input['nama_prodi']) != "") and (isset($input['semester']) == "")) {
      $kota_favorit = array();
      foreach ($input['nama_prodi'] as $kota2) {
          array_push($kota_favorit, $kota2);
      }
      $kota2 = serialize($kota_favorit);

      $query2 =  DB::update("UPDATE matkul SET  nama_prodi = '$kota2', kode_matkul = '$a', nama_matkul = '$b', sks = '$c', kelas = '$d' WHERE id_matkul = '$id_matkul'");

        return redirect()->route('admin_matkul')
            ->with('flash_message',
             'Data Matkul Berhasil Diubah.');
      }
      else{
              $query2 =  DB::update("UPDATE matkul SET kode_matkul = '$a', nama_matkul = '$b', sks = '$c', kelas = '$d' WHERE id_matkul = '$id_matkul'");

        return redirect()->route('matakuliah')
            ->with('flash_message',
             'Data Matkul Berhasil Diubah.');
      }

    }

    public function deletematakuliah($id_matkul)
    {
        $matkul = Matkul::find($id_matkul);
        $th = $matkul->id_tahunajaran;
    $matkul->delete();
      return redirect()->route('matakuliah',[$th])
          ->with('flash_message',
           'Matkul Berhasil Dihapus');
    } 

    public function bagikelas(Request $request, $id_matkul)
    {
    $matkul = Matkul::find($id_matkul);

    $bagikelas = DB::insert("INSERT INTO matkul (nama_prodi,kode_matkul,nama_matkul,sks,kelas,semester) VALUES ('$matkul->nama_prodi','$matkul->kode_matkul','$matkul->nama_matkul','$matkul->sks','$matkul->kelas','$matkul->semester')");

        return redirect()->route('matakuliah')
            ->with('flash_message',
             'Bagi Kelas Berhasil.');
    }

    // akhir matakuliah   

    // mulai jamkuliah
    public function jamkuliah(){
    	return view('akademik_kuliah.jamkuliah');
    }    
    // akhir jamkuliah     
}
