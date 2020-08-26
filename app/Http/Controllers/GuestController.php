<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class GuestController extends Controller
{
    public function index(){
        $data = Buku::paginate(8);

        return view('guest.welcome',['data'=>$data]);
    }

    public function salam(){
    	return view('guest.salam');
    }

    public function about(){
        return view('guest.about');
    }

    public function daftarbuku(){
        return view('guest.daftarbuku');
    }

    public function pinjambuku(){
        return view('guest.pinjam');
    }

    public function loginuser(){
        return view('guest.loginuser');
    }

    public function regisuser(){
        return view('guest.Register');
    }

    public function myprofile(){
        return view('guest.myprofile');
    }

    public function bukuonline(){
        return view('guest.daftarbukuonline');
    }

    public function showbukuguest(){
        return view('guest.showbuku');
    }

    

}
