<?php

use Illuminate\Database\Seeder;
use App\Buku;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Buku::class, 1000)->create();
    }
}
