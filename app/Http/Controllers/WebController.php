<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //pindah ke home
    public function home(){
    	return view('home');
    }

    // klik button selengkapnya
    public function selamat(){
    	return view('selamat');
    }

    // klik button berita
    public function berita(){
    	return view('berita');
    }

    public function agenda(){
    	return view('agenda');
    }

    public function galeri(){
    	return view('galeri');
    }

    public function kontak(){
    	return view('kontak');
    }
}
