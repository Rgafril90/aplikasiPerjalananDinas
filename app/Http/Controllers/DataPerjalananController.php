<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataPerjalanan;
use App\Models\badan;


class DataPerjalananController extends Controller
{
    //Method index()
    public function index() {
        $data_perjalanans = dataPerjalanan::all();
        return view('dataPerjalanan.index')->with('data_perjalanans', $data_perjalanans);
    }

    public function create() 
    {
        $data_perjalanans = dataPerjalanan::all();
            return view('dataPerjalanan.create')->with('data_perjalanans', $data_perjalanans);
    }

    public function store(Request $request) {
        // Validasi data kosong
        $validateData = $request->validate([
            'noSuratTugas' => 'required',
            'noSPPD' => 'required',
            'tanggalSurat' => 'required',
            'tanggalBerangkat' => 'required',
            'devisi' => 'required',
            'nama' => 'required',
            'prihal' => 'required' 
        ]);

        // Simpan Data
        $dataPerjalanan = new dataPerjalanan();
        $dataPerjalanan -> noSuratTugas = $validateData['noSuratTugas'];
        $dataPerjalanan -> noSPPD = $validateData['noSPPD'];
        $dataPerjalanan -> tanggalSurat = $validateData['tanggalSurat'];
        $dataPerjalanan -> tanggalBerangkat = $validateData['tanggalBerangkat'];
        $dataPerjalanan -> devisi = $validateData['devisi'];
        $dataPerjalanan -> nama = $validateData['nama'];
        $dataPerjalanan -> prihal = $validateData['prihal'];

        $dataPerjalanan->save();
        return redirect()->route('dataPerjalanan.index');
    }
}
