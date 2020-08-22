<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "tbl_buku";
    protected $primaryKey = "id_buku";
    public $timestamps = false;
    protected $fillable = [
        'judul_buku','file_gambar_buku','jumlah_halaman','pengarang','penerbit','sinopsis','deskripsi','id_kategori','kelas','jumlah_buku','id_ruangan','jumlah_buku_diluar','status'
    ];

    public function Tkategori()
    {
        return $this->belongsTo('App\Kategori','id_kategori');
    }
}
