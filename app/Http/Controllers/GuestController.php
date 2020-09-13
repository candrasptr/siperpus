<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;
use Illuminate\Support\Facades\DB;


class GuestController extends Controller
{
    public function index(Request $request){
        $data = DB::table('tbl_buku')
                ->where('tbl_buku.judul_buku','like',"%{$request->keyword}%")
                ->orWhere('tbl_buku.penerbit','like',"%{$request->keyword}%")
                ->paginate(8)->onEachSide(0);


        return view('guest.welcome',['data'=>$data]);
    }


    public function daftarbuku(Request $request){
        $data = DB::table('tbl_buku')
                ->join('tbl_kategori','tbl_kategori.id_kategori','=','tbl_buku.id_kategori')
                ->join('tbl_ruangan','tbl_ruangan.id_ruangan','=','tbl_buku.id_ruangan')
                ->where('tbl_buku.judul_buku','like',"%{$request->keyword}%")
                ->orWhere('tbl_buku.penerbit','like',"%{$request->keyword}%")
                ->orderBy('tbl_ruangan.id_ruangan')
                ->paginate(8)->onEachSide(0);

        return view('guest.daftarbuku',['data'=>$data]);
    }

    public function showbuku(Buku $buku)
    {
        return view('guest.show',['row'=>$buku]);
    }

    public function kategori(Kategori $kategori)
    {
        $data = Buku::where('id_kategori',$kategori->id_kategori)->paginate(8);

		return view('guest.daftarbukukategori',['data'=>$data,'kategori'=>$kategori]);
    }

    public function salam(){
    	return view('guest.salam');
    }

    public function home(){
        return view('guest.pinjam');
    }

    public function about(){
        return view('guest.about');
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
