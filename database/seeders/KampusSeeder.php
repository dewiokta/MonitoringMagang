<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kampuses')->insert(
            [
                'nip'       => '0001',
                'nama_dosen'=> 'Abdul Somad Kuncoro',
                'jurusan'   => 'Teknologi Informasi',
                'jabatan'   => 'Kepala Prodi'
            ]
        );
    }
}
