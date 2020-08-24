<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transaksi;
use App\Buku;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('tbl_transaksi')
                ->where('tbl_transaksi.nama_peminjam','like',"%{$request->keyword}%")
                ->paginate(20);


        return view('admin.transaksi.index',['data'=>$data],);
    }

    public function inputtransaksi()
    {
        $buku = DB::table('tbl_buku')
                ->select('tbl_buku.judul_buku','tbl_buku.id_buku')
                ->get();
        return view('admin.petugas.index',['buku'=>$buku],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nisnnip'=>'required',
            'Nama_Peminjam'=>'required',
            'kelas'=>'required',
            'Alamat'=>'required',
            'No_HP'=>'required',
            'Judul_Buku'=>'required',
            'Jumlah_Pinjam'=>'required',
            'Waktu_Peminjaman'=>'required',
            'Waktu_kembali'=>'required',
            'status'=>'required',
        ]);

        Ruangan::create([
            'nisn/nip'=>$request->nisnnip,
            'nama_peminjam'=>$request->Nama_Peminjam,
            'kelas_peminjam'=>$request->kelas,
            'alamat_peminjam'=>$request->Alamat,
            'nohp_peminjam'=>$request->No_HP,
            'id_buku'=>$request->id_buku,
            'judul_buku'=>$request->Judul_Buku,
            'jumlah_pinjam'=>$request->Jumlah_Pinjam,
            'waktu_peminjaman'=>$request->Waktu_peminjaman,
            'waktu_kembali'=>$request->Waktu_Kembali,
            'status'=>$request->status,
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
