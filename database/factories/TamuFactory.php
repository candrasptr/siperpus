<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tamu;
use Faker\Generator as Faker;

$factory->define(Tamu::class, function (Faker $faker) {
    return [
        'nisnnip'=>$faker->unique()->randomNumber($nbDigits = 8),
        'nama_tamu'=>$faker->name,
        'kelas_tamu'=>$faker->randomElement(['XII RPL A', 'XII RPL B', 'XII RPL C',' ']),
        'tanggal_kunjungan'=>$faker->dateTimeBetween($startDate = '-7 month', $endDate = 'now'),
    ];
});
