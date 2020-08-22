<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class OtentikasiController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

            $data = Admin::where('email',$request->email)->firstOrFail();
            if($data){
                if(Hash::check($request->password,$data->password)){
                    session(['berhasil_login'=>true]);
                    return redirect('/dashboard');
                }
            }
            return redirect('/petugas')->with('message','Email atau Password salah');

    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/petugas');
    }
    
}
