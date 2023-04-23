<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dataPerjalanan;

class DataPerjalananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dataPerjalanan::create(
            [
                'noSuratTugas' => '20222022',
                'noSPPD' => '2024255888',
                'tanggalSurat' => '2020-04-20',
                'tanggalBerangkat' => '2002-4-22',
                'komisi' => 'Humas dan Protokol',
                'nama' => 'Boy',
                'prihal' => 'Kunjungan Silahturami'
            ]
            );
    }
}
