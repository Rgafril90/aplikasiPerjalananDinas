<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\badan;

class BadanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        badan::create(
            [
                'id_badan' => 'B1',
                'nama_badan' => 'Badan Anggaran'
            ]
            );

            badan::create(
                [
                    'id_badan' => 'B4',
                    'nama_badan' => 'Badan Kehormatan'
                ]
                );
    }
}
