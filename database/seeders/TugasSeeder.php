<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tugas')->insert(
            [
                'kode_tugas'       => '2221',
                'nama_tugas'       => 'Buat database',
                'status'           => 'Selesai',
            ],
        );
    }
}
