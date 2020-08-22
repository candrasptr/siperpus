<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('tbl_kategori')
                ->where('tbl_kategori.nama_kategori','like',"%{$request->keyword}%")
                ->paginate(10);

        return view('admin.kategori.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
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
            'nama_kategori'=>'required',
            'deskripsi'=>'required',
        ]);

        Kategori::create([
            'nama_kategori'=>$request->nama_kategori,
            'deskripsi'=>$request->deskripsi,
        ]);

        return redirect()->route('kategori.index')->with('store','Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit',['row'=>$kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama_kategori'=>'required',
            'deskripsi'=>'required',
        ]);
        
        $query = [
            'nama_kategori'=>$request->nama_kategori,
            'deskripsi'=>$request->deskripsi,
        ];

        $kategori->update($query);
        return redirect()->route('kategori.index')->with('update','Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('destroy','Berhasil dihapus!');
    }
}
