<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class AkademikController extends Controller
{
    // mulai prodi
    public function prodi(){
    	return view('akademik_prodi.index');
    }    
    // akhir prodi
    
  public function editprofil()
  {
    $users = Auth::user();        
    $edituser = User::find($users->id);        
    return view('editprofil', compact('edituser'));
  } 

  public function updateprofil(Request $request)
  {

        $users = Auth::user(); 
        $user = User::findOrFail($users->id); 

        $input = $request->only(['name', 'email', 'password']); 
        if ($request->input('password') == '')
        {
        $user = User::find($users->id);
        $user->name = $input['name'];
        $user->email = $input['email'];          
        $user->update();
        }     
        else{
                  $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$users->id,
            'password'=>'required|min:6|confirmed'
        ]);  
                   $user->fill($input)->save();
        }   
       

        return redirect()->route('editprofil')
            ->with('flash_message',
             'Profil Berhasil Diubah.');

  }    
}
