<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    public $timestamps = false;
    protected $table = "tbl_tamu";
    protected $primaryKey = "id_tamu";
    protected $fillable = [
        'nisnnip','nama_tamu','kelas_tamu','tanggal_kunjungan'
    ];
}
