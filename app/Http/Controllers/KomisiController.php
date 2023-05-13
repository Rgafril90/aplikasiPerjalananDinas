<?php

namespace App\Http\Controllers;

use App\Models\komisi;
use Illuminate\Http\Request;

class KomisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dataKomisi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\komisi  $komisi
     * @return \Illuminate\Http\Response
     */
    public function show(komisi $komisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\komisi  $komisi
     * @return \Illuminate\Http\Response
     */
    public function edit(komisi $komisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\komisi  $komisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, komisi $komisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\komisi  $komisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(komisi $komisi)
    {
        //
    }
}
