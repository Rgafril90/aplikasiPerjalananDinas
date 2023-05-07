<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     //Method index()
    public function index()
    {
        $pegawais = pegawai::all();
        return view('dataPegawai.index')->with('pegawais', $pegawais);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawais = pegawai::all();
        return view('dataPegawai.create')->with('pegawais', $pegawais);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('create', pegawai::class);
        // 1. validasi input data kosong
        $validateData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required'
        ]);

        // 2.Simpan data
        $pegawai = new pegawai();
        $pegawai->nik = $validateData['nik'];
        $pegawai->nama = $validateData['nama'];
        $pegawai->alamat = $validateData['alamat'];
        $pegawai->jenis_kelamin = $validateData['jenis_kelamin'];
        $pegawai->tanggal_lahir = $validateData['tanggal_lahir'];

        $pegawai->save();
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pegawai $pegawai)
    {
        //1.validasi input data kosong
        // $validateData = $request->validate([
        //     'nik' => 'required',
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'tanggal_lahir' => 'required'
        // ]);

        // 2.simpan perubahan
        // pegawai::where('id', $pegawai->id)->update($validateData);
        // $request->session()->flash('info',"Data Berhasil Disimpan")
        // return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(pegawai $pegawai)
    {
        //
    }
}
