<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('tbl_buku')
                ->join('tbl_kategori','tbl_kategori.id_kategori','=','tbl_buku.id_kategori')
                ->join('tbl_ruangan','tbl_ruangan.id_ruangan','=','tbl_buku.id_ruangan')
                ->where('tbl_buku.judul_buku','like',"%{$request->keyword}%")
                ->orderBy('tbl_ruangan.id_ruangan')
                ->paginate(10);

        $data_kategori = DB::table('tbl_kategori');
        return view('admin.buku.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = DB::table('tbl_kategori');
        return view('admin.buku.create',['data_kategori'=>$data_kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar'=>'required|image',
            'judul_buku'=>'required|between:3,150',
            'pengarang'=>'required',
            'penerbit'=>'required',
            'kategori'=>'required',
            'deskripsi'=>'required',
            'jumlah_buku_total'=>'required',
            'jumlah_buku'=>'required',
            'jumlah_buku_diluar'=>'required',
            'status'=>'required',
        ]);

        $file = $request->file('gambar');
        $ext = $file->getClientOriginalExtension();
        $new_filename = date('YmdHis').'_'.rand().'.'.$ext;
        $file->move('images',$new_filename);
            
        Buku::create([
            'judul_buku'=>$request->judul_buku,
            'file_gambar_buku'=>$new_filename,
            'pengarang'=>$request->pengarang,
            'penerbit'=>$request->penerbit,
            'sinopsis'=>$request->sinopsis,
            'deskripsi'=>$request->deskripsi,
            'id_kategori'=>$request->kategori,
            'jumlah_buku_total'=>$request->jumlah_buku_total,
            'jumlah_buku'=>$request->jumlah_buku,
            'jumlah_buku_diluar'=>$request->jumlah_buku_diluar,
            'id_ruangan'=>$request->ruangan,
            'status'=>$request->status,
        ]);

        return redirect()->route('buku.index')->with('store','Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        return view('admin.buku.show',['row'=>$buku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        return view('admin.buku.edit',['row'=>$buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'gambar'=>'nullable|image',
            'judul_buku'=>'required|between:3,150',
            'pengarang'=>'required',
            'penerbit'=>'required',
            'kategori'=>'required',
            'deskripsi'=>'required',
            'jumlah_buku_total'=>'required',
            'jumlah_buku'=>'required',
            'jumlah_buku_diluar'=>'required',
            'status'=>'required',
        ]);

        if(!empty($request->gambar)){

            $file = $request->file('gambar');
            $ext = $file->getClientOriginalExtension();
            $new_filename = date('YmdHis').'_'.rand().'.'.$ext;
            $file->move('images',$new_filename);

            $query = [
                'judul_buku'=>$request->judul_buku,
                'file_gambar_buku'=>$new_filename,
                'pengarang'=>$request->pengarang,
                'penerbit'=>$request->penerbit,
                'sinopsis'=>$request->sinopsis,
                'deskripsi'=>$request->deskripsi,
                'id_kategori'=>$request->kategori,
                'jumlah_buku_total'=>$request->jumlah_buku_total,
                'jumlah_buku'=>$request->jumlah_buku,
                'jumlah_buku_diluar'=>$request->jumlah_buku_diluar,
                'id_ruangan'=>$request->ruangan,
                'status'=>$request->status,
            ];
        } else {
            $query = [
                'judul_buku'=>$request->judul_buku,
                'pengarang'=>$request->pengarang,
                'penerbit'=>$request->penerbit,
                'sinopsis'=>$request->sinopsis,
                'deskripsi'=>$request->deskripsi,
                'id_kategori'=>$request->kategori,
                'jumlah_buku_total'=>$request->jumlah_buku_total,
                'jumlah_buku'=>$request->jumlah_buku,
                'jumlah_buku_diluar'=>$request->jumlah_buku_diluar,
                'id_ruangan'=>$request->ruangan,
                'status'=>$request->status,
            ];
        }
        $buku->update($query);
        return redirect()->route('buku.index')->with('update','Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('destroy','Berhasil dihapus!');
    }

    public function showbuku(){
        return view('admin/buku.showbuku');
    }

}
