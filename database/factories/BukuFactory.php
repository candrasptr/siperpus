<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Buku;
use Faker\Generator as Faker;

$factory->define(Buku::class, function (Faker $faker) {
    $jumlahbuk = $faker->numberBetween($min = 1, $max = 53);
    return [
        'judul_buku'=>$faker->sentence($nbWords = 3, $variableNbWords = true),
        'file_gambar_buku'=>'noimage.png',
        'pengarang'=>$faker->name,
        'penerbit'=>$faker->word,
        'sinopsis'=>$faker->text,
        'deskripsi'=>$faker->text,
        'id_kategori'=>$faker->numberBetween($min = 1, $max = 4),
        'jumlah_buku_total'=>$jumlahbuk,
        'jumlah_buku'=>$jumlahbuk,
        'jumlah_buku_diluar'=>'0',
        'id_ruangan'=>$faker->numberBetween($min = 1,$max = 10),
        'status'=>'Tersedia'
    ];
});
