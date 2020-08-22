<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'nama_kategori' => 'Buku Pelajaran',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada euismod rhoncus. Nam leo ante, cursus pretium risus vitae, rhoncus luctus justo. Donec imperdiet in erat nec finibus. Sed vehicula.'
        ]);

        Kategori::create([
            'nama_kategori' => 'Buku Novel',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada euismod rhoncus. Nam leo ante, cursus pretium risus vitae, rhoncus luctus justo. Donec imperdiet in erat nec finibus. Sed vehicula.'

        ]);

        Kategori::create([
            'nama_kategori' => 'Buku Dongeng',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada euismod rhoncus. Nam leo ante, cursus pretium risus vitae, rhoncus luctus justo. Donec imperdiet in erat nec finibus. Sed vehicula.'
        ]);

        Kategori::create([
            'nama_kategori' => 'Buku Anak Anak',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada euismod rhoncus. Nam leo ante, cursus pretium risus vitae, rhoncus luctus justo. Donec imperdiet in erat nec finibus. Sed vehicula.'
        ]);
    }
}
