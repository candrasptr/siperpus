<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $timestamps = false;
    protected $table = "tbl_transaksi";
    protected $primaryKey = "id_transaksi";
    protected $fillable = [
        'nisn/nip','nama_peminjam','kelas_peminjam','alamat_peminjam','nohp_peminjam','id_buku','judul_buku','jumlah_pinjam',
        'waktu_peminjaman','waktu_kembali','status',
    ];
}
