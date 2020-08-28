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
                ->orderBy('id_transaksi', 'ASC')
                ->paginate(20);
        return view('admin.transaksi.index',['data'=>$data]);
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
            'Nama_Peminjam'=>'required',
            'Jumlah_Pinjam'=>'required',
            'Alamat'=>'required',
        ]);

        $jb = Buku::select('judul_buku')->where('id_buku', "{$request->id_buku}")->pluck('judul_buku')->first();
        $jumlah_buku = Buku::select('jumlah_buku')->where('id_buku', "{$request->id_buku}")->pluck('jumlah_buku')->first();
        if($jumlah_buku === 0)
        {
            return redirect()->route('transaksi.index')->with('gagal','Buku telah habis');
        }elseif($jumlah_buku < $request->Jumlah_Pinjam){
            return redirect()->route('transaksi.index')->with('gagal','Buku tersisa '.$jumlah_buku);
        }
        $jumlah_buku_diluar = Buku::select('jumlah_buku_diluar')->where('id_buku', "{$request->id_buku}")->pluck('jumlah_buku_diluar')->first();
        $aritmatikajumlahbuku = $jumlah_buku - $request->Jumlah_Pinjam;
        $aritmatikajumlahbukudiluar = $jumlah_buku_diluar + $request->Jumlah_Pinjam;
        Transaksi::create([
            'nisnnip'=>$request->nisnnip,
            'nama_peminjam'=>$request->Nama_Peminjam,
            'kelas_peminjam'=>$request->kelas,
            'alamat_peminjam'=>$request->Alamat,
            'nohp_peminjam'=>$request->No_HP,
            'id_buku'=>$request->id_buku,
            'judul_buku'=>$jb,
            'jumlah_pinjam'=>$request->Jumlah_Pinjam,
            'tanggal_peminjaman'=>$request->Tanggal_Peminjaman,
            'tanggal_kembali'=>$request->Tanggal_Kembali,
            'status'=>'DIPINJAM',
        ]);
        if($aritmatikajumlahbuku === 0){
            Buku::where('id_buku',"{$request->id_buku}")->update(['jumlah_buku' => $aritmatikajumlahbuku, 'jumlah_buku_diluar'=>$aritmatikajumlahbukudiluar, 'status'=>'Habis']);
        }
        Buku::where('id_buku',"{$request->id_buku}")->update(['jumlah_buku' => $aritmatikajumlahbuku, 'jumlah_buku_diluar'=>$aritmatikajumlahbukudiluar]);
        return redirect()->route('transaksi.index')->with('store','Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        return view('admin.transaksi.show',['row'=>$transaksi]);
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

    public function transaksiselesai(Transaksi $transaksi)
    {
        if($transaksi->status != "SELESAI")
        {
            $jumlah_buku = Buku::select('jumlah_buku')->where('id_buku','=',$transaksi->id_buku)->pluck('jumlah_buku')->first();
            $jumlah_buku_diluar = Buku::select('jumlah_buku_diluar')->where('id_buku','=',$transaksi->id_buku)->pluck('jumlah_buku_diluar')->first();
            $aritmatikajumlahbuku = $jumlah_buku + $transaksi->jumlah_pinjam;
            $aritmatikajumlahbukudiluar = $jumlah_buku_diluar - $transaksi->jumlah_pinjam;
            Buku::where('id_buku',"{$transaksi->id_buku}")->update(['jumlah_buku' => $aritmatikajumlahbuku, 'jumlah_buku_diluar'=>$aritmatikajumlahbukudiluar]);
            Transaksi::where('id_transaksi',"{$transaksi->id_transaksi}")->update(['status' => 'SELESAI']);
            if($aritmatikajumlahbukudiluar === 0){
                Buku::where('id_buku',"{$transaksi->id_buku}")->update(['status'=>'Tersedia']);
            }
            return redirect()->route('transaksi.index')->with('store',' Peminjaman Telah Selesai !');
        }
        return redirect()->route('transaksi.index')->with('gagal',' peminjaman telah selesai sebelumnya !');
    }
}
