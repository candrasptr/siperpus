<?php

use Illuminate\Database\Seeder;
use App\Tamu;

class TamuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tamu::class, 1000)->create();
    }
}
