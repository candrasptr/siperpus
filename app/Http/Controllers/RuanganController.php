<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ruangan;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $data = DB::table('tbl_ruangan')
                ->where('tbl_ruangan.kode_ruangan','like',"%{$request->keyword}%")
                ->paginate(4);
        return view('admin.ruangan.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ruangan.create');
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
            'kode_ruangan'=>'required',
            'deskripsi_ruangan'=>'required',
        ]);

        Ruangan::create([
            'kode_ruangan'=>$request->kode_ruangan,
            'deskripsi'=>$request->deskripsi_ruangan,
        ]);

        return redirect()->route('ruangan.index')->with('store','Berhasil disimpan!');
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
    public function edit(Ruangan $ruangan)
    {
        return view('admin.ruangan.edit',['row'=>$ruangan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruangan $ruangan)
    {
        $request->validate([
            'kode_ruangan'=>'required',
            'deskripsi_ruangan'=>'required',
        ]);
        
        $query = [
            'kode_ruangan'=>$request->kode_ruangan,
            'deskripsi'=>$request->deskripsi_ruangan,
        ];

        $ruangan->update($query);
        return redirect()->route('ruangan.index')->with('update','Berhasil diupdate!');
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
