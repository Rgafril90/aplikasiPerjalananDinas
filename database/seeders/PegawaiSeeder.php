<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pegawai::create(
            [
                'nik' => '2024250058',
                'nama' => 'Riganda Saputra',
                'alamat' => 'Plaju',
                'jenis kelamin' => 'laki-laki',
                'tanggal lahir' => '2000-12-11'
            ]
            );
    }
}
