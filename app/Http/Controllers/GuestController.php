<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
<<<<<<< HEAD
use App\Kategori;
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Support\Facades\Db;
>>>>>>> 7d3ee3124e14eb1dc4133dc52041e481fcc24410

class GuestController extends Controller
{
    public function index(){
        $data = Buku::paginate(8);

        return view('guest.welcome',['data'=>$data]);
    }

<<<<<<< HEAD
    public function daftarbuku()
    {
=======
    public function daftarbuku(){
>>>>>>> 7d3ee3124e14eb1dc4133dc52041e481fcc24410
        $data = Buku::paginate(8);

        return view('guest.daftarbuku',['data'=>$data]);
    }

<<<<<<< HEAD
    public function kategori(Kategori $kategori)
    {
        $data = Buku::where('id_kategori',$kategori->id_kategori)->paginate(8);

		return view('guest.daftarbukukategori',['data'=>$data,'kategori'=>$kategori]);
    }

=======
>>>>>>> 7d3ee3124e14eb1dc4133dc52041e481fcc24410
    public function salam(){
    	return view('guest.salam');
    }

    public function about(){
        return view('guest.about');
    }

<<<<<<< HEAD

=======
>>>>>>> 7d3ee3124e14eb1dc4133dc52041e481fcc24410
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
