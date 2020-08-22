<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_ruangan';
    protected $table = 'tbl_ruangan';
    protected $fillable = [
        'kode_ruangan','deskripsi',
    ];
}
