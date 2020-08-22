<?php

use Illuminate\Database\Seeder;
use App\Ruangan;

class RuanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ruangan A
        Ruangan::create([
            'Blok' => 'A',
            'Baris' => '1'
        ]);
        Ruangan::create([
            'Blok' => 'A',
            'Baris' => '2'
        ]);
        Ruangan::create([
            'Blok' => 'A',
            'Baris' => '3'
        ]);
        Ruangan::create([
            'Blok' => 'A',
            'Baris' => '4'
        ]);
        
        //Ruangan B
        Ruangan::create([
            'Blok' => 'B',
            'Baris' => '1'
        ]);
        Ruangan::create([
            'Blok' => 'B',
            'Baris' => '2'
        ]);
        Ruangan::create([
            'Blok' => 'B',
            'Baris' => '3'
        ]);
        Ruangan::create([
            'Blok' => 'B',
            'Baris' => '4'
        ]);
        
        //Ruangan C
        Ruangan::create([
            'Blok' => 'C',
            'Baris' => '1'
        ]);
        Ruangan::create([
            'Blok' => 'C',
            'Baris' => '2'
        ]);
        Ruangan::create([
            'Blok' => 'C',
            'Baris' => '3'
        ]);
        Ruangan::create([
            'Blok' => 'C',
            'Baris' => '4'
        ]);
        
        //Ruangan D
        Ruangan::create([
            'Blok' => 'D',
            'Baris' => '1'
        ]);
        Ruangan::create([
            'Blok' => 'D',
            'Baris' => '2'
        ]);
        Ruangan::create([
            'Blok' => 'D',
            'Baris' => '3'
        ]);
        Ruangan::create([
            'Blok' => 'D',
            'Baris' => '4'
        ]);
    }
}
