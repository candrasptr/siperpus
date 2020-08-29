<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Transaksi;
use App\Tamu;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function index()
    {
        $jumlah_buku_total = Buku::sum('jumlah_buku_total');

        $data_kunjung_perbulan = Tamu::whereMonth('tanggal_kunjungan','=',Carbon::now()->month)->count();
        $data_kunjung_perbulan_chrt = Tamu::select(\DB::raw("COUNT(*) as count"))
                                    ->whereYear('tanggal_kunjungan', date('Y'))
                                    ->groupBy(\DB::raw("Month(tanggal_kunjungan)"))
                                    ->pluck('count');

        $data_transaksi_perbulan = Transaksi::whereMonth('tanggal_peminjaman','=',Carbon::now()->month)->count();
        $data_transaksi_perbulan_chrt = Transaksi::select(\DB::raw("COUNT(*) as count"))
                                    ->whereYear('tanggal_peminjaman', date('Y'))
                                    ->groupBy(\DB::raw("Month(tanggal_peminjaman)"))
                                    ->pluck('count');

        
        $data_pinjam_selesai_perbulan = Transaksi::where('status','=','SELESAI')->whereMonth('tanggal_peminjaman','=',Carbon::now()->month)->count();
        $data_pinjam_selesai_perbulan_chrt = Transaksi::select(\DB::raw("COUNT(*) as count"))
                                    ->where('status','=','SELESAI')
                                    ->whereYear('tanggal_peminjaman', date('Y'))
                                    ->groupBy(\DB::raw("Month(tanggal_peminjaman)"))
                                    ->pluck('count');

        $data_pinjam_dipinjam_perbulan = Transaksi::where('status','=','DIPINJAM')->whereMonth('tanggal_peminjaman','=',Carbon::now()->month)->count();
        $data_pinjam_dipinjam_perbulan_chrt = Transaksi::select(\DB::raw("COUNT(*) as count"))
                                    ->where('status','=','DIPINJAM')
                                    ->whereYear('tanggal_peminjaman', date('Y'))
                                    ->groupBy(\DB::raw("Month(tanggal_peminjaman)"))
                                    ->pluck('count');

        $data_pinjam_kadaluarsa_perbulan = Transaksi::where('status','=','KADALUARSA')->whereMonth('tanggal_peminjaman','=',Carbon::now()->month)->count();
        $data_pinjam_kadaluarsa_perbulan_chrt = Transaksi::select(\DB::raw("COUNT(*) as count"))
                                    ->where('status','=','KADALUARSA')
                                    ->whereYear('tanggal_peminjaman', date('Y'))
                                    ->groupBy(\DB::raw("Month(tanggal_peminjaman)"))
                                    ->pluck('count');

        return view('admin.laporan.index',[
            'jumlah_buku_total'=>$jumlah_buku_total,
            'data_kunjung_perbulan'=>$data_kunjung_perbulan,
            'data_kunjung_perbulan_chrt'=>$data_kunjung_perbulan_chrt,
            'data_transaksi_perbulan'=>$data_transaksi_perbulan, 
            'data_transaksi_perbulan_chrt'=>$data_transaksi_perbulan_chrt,
            'data_pinjam_selesai_perbulan'=>$data_pinjam_selesai_perbulan,
            'data_pinjam_selesai_perbulan_chrt'=>$data_pinjam_selesai_perbulan_chrt,
            'data_pinjam_dipinjam_perbulan'=>$data_pinjam_dipinjam_perbulan,
            'data_pinjam_dipinjam_perbulan_chrt'=>$data_pinjam_dipinjam_perbulan_chrt,
            'data_pinjam_kadaluarsa_perbulan'=>$data_pinjam_kadaluarsa_perbulan,
            'data_pinjam_kadaluarsa_perbulan_chrt'=>$data_pinjam_kadaluarsa_perbulan_chrt,

        ]);
    }
}
