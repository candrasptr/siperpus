<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaksi;
use Faker\Generator as Faker;

$factory->define(Transaksi::class, function (Faker $faker) {
    return [
        'nisnnip'=>$faker->unique()->randomNumber($nbDigits = 8),
        'nama_peminjam'=>$faker->name,
        'kelas_peminjam'=>$faker->randomElement(['XII RPL A', 'XII RPL B', 'XII RPL C',' ']),
        'alamat_peminjam'=>$faker->address,
        'nohp_peminjam'=>$faker->e164PhoneNumber,
        'id_buku'=>'1',
        'judul_buku'=>'Quos omnis quis expedita.',
        'jumlah_pinjam'=>$faker->numberBetween($min = 1, $max = 40),
        'tanggal_peminjaman'=>$faker->dateTimeBetween($startDate = '-7 month', $endDate = 'now'),
        'tanggal_kembali'=>'2020-08-28',
        'status'=>'SELESAI',
    ];
});
