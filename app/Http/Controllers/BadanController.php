<?php

namespace App\Http\Controllers;

use App\Models\badan;
use App\Models\dataPerjalanan;
use Illuminate\Http\Request;

class BadanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $badans = badan::all();
        return view('dataBadan.index')->with('badans', $badans);
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
     * @param  \App\Models\badan  $badan
     * @return \Illuminate\Http\Response
     */
    public function show(badan $badan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\badan  $badan
     * @return \Illuminate\Http\Response
     */
    public function edit(badan $badan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\badan  $badan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, badan $badan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\badan  $badan
     * @return \Illuminate\Http\Response
     */
    public function destroy(badan $badan)
    {
        //
    }
}
