<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Tamu;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {

        $datapinjamperbulan = Transaksi::whereMonth('tanggal_peminjaman','=',Carbon::now()->month)->count();
        $datapinjamperbulanchrt = Transaksi::select(\DB::raw("COUNT(*) as count"))
                                    ->whereYear('tanggal_peminjaman', date('Y'))
                                    ->groupBy(\DB::raw("Month(tanggal_peminjaman)"))
                                    ->pluck('count');

        $datakunjungperbulan = Tamu::whereMonth('tanggal_kunjungan','=',Carbon::now()->month)->count();
        $datakunjungperbulanchrt = Tamu::select(\DB::raw("COUNT(*) as count"))
                                    ->whereYear('tanggal_kunjungan', date('Y'))
                                    ->groupBy(\DB::raw("Month(tanggal_kunjungan)"))
                                    ->pluck('count');

        return view('admin.dashboard',[
            'datapinjamperbulan'=>$datapinjamperbulan, 
            'datapinjamperbulanchrt'=>$datapinjamperbulanchrt,
            'datakunjungperbulan'=>$datakunjungperbulan,
            'datakunjungperbulanchrt'=>$datakunjungperbulanchrt
        ]);
    }
}
