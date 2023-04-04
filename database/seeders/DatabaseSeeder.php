<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KampusSeeder::class,
            PerusahaanSeeder::class,
            TugasSeeder::class,
            MahasiswaSeeder::class,
            MhsMemilikiTugasSeeder::class
        ]);
    }
}
