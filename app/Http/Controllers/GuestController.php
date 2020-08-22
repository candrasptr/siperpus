<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view('guest.home');
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
