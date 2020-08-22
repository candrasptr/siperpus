<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Buku;
use Faker\Generator as Faker;

$factory->define(Buku::class, function (Faker $faker) {
    return [
        'judul_buku'=>$faker->sentence($nbWords = 3, $variableNbWords = true),
        'file_gambar_buku'=>'noimage.png',
        'jumlah_halaman'=>$faker->numberBetween($min = 10,$max = 500),
        'pengarang'=>$faker->name,
        'penerbit'=>$faker->word,
        'sinopsis'=>$faker->text,
        'deskripsi'=>$faker->text,
        'id_kategori'=>$faker->numberBetween($min = 1, $max = 4),
        'kelas'=>$faker->numberBetween($min = 7, $max = 9),
        'jumlah_buku'=>$faker->numberBetween($min = 1, $max = 53),
        'jumlah_buku_diluar'=>'0',
        'id_ruangan'=>$faker->numberBetween($min = 1,$max = 10),
        'status'=>'Tersedia'
    ];
});
