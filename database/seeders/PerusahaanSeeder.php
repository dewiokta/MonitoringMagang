<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaans')->insert(
            [
                'kode_pt'       => '3331',
                'nama_pt'       => 'Pertamina',
                'alamat'        => 'Jl. Kusuma Bangsa, Jakarta Pusat',
                'pembimbing'    => 'Drs. Sugiarto Kusumo Widodo'
            ]
        );
    }
}
