<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MhsMemilikiTugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mhs_memiliki_tugas')->insert(
            [
                'nilai'       => 'A',
                'komentar'    => 'Sangat bagus! Nice work!',
            ]
        );
    }
}
