<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('mhss')->insert([
            [
                'nim'       => '1931710071',
                'nama_mhs'  => 'Dewi Oktavia Effendi',
                'ttl'       => 'Magetan, 11 Oktober 2000',
                'jurusan'   => 'Teknologi Informasi'
            ],[
                'nim'       => '1931710015',
                'nama_mhs'  => 'Jaya Mahendra',
                'ttl'       => 'Blitar, 5 Oktober 2000',
                'jurusan'   => 'Teknologi Informasi'
            ],[
                'nim'       => '1931710165',
                'nama_mhs'  => 'Ardhanika Muji Rahman Hidayatullah',
                'ttl'       => 'Magetan, 17 Oktober 2000',
                'jurusan'   => 'Teknologi Informasi'
            ]
        ]);
        
        //
        // $mhs1 = new Mahasiswa();
        // $mhs1->nim = "1931710015";
        // $mhs1->nama_mhs = "Jaya Mahendra";
        // $mhs1->ttl = "Blitar, 5 Oktober 2000";
        // $mhs1->jurusan = "Teknologi Informasi";
        // $mhs1->save();


    }
}
