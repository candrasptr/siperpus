<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tamu;
use App\Buku;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('tbl_tamu')
                ->where('tbl_tamu.nama_tamu','like',"%{$request->keyword}%")
                ->orderBy('id_tamu','DESC')
                ->paginate(10);
        return view('admin.bukutamu.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bukutamu.create');
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
            'nama_tamu'=>'required',
            'tanggal_kunjungan'=>'required|date'
        ]);

        Tamu::create([
            'nisnnip'=>$request->nisnnip,
            'nama_tamu'=>$request->nama_tamu,
            'kelas_tamu'=>$request->kelas_tamu,
            'tanggal_kunjungan'=>$request->tanggal_kunjungan
        ]);

        return redirect()->route('bukutamu.index')->with('store','Berhasil disimpan!');
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
    public function edit(Tamu $tamu)
    {
        return view('admin.bukutamu.edit',['row'=>$tamu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bukutamu $tamu)
    {
        $request->validate([
            'nama_tamu'=>'required',
            'tanggal_kunjung'=>'required|date',
        ]);

        $query = [
            'nisnnip'=>$request->nisnnip,
            'nama_tamu'=>$request->nama_tamu,
            'kelas_tamu'=>$request->kelas_tamu,
            'tanggal_kunjung'=>$request->tanggal_kunjung,
        ];

        $tamu->update($query);
        return redirect()->route('bukutamu.index')->with('update','Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
