<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataPerjalanan;

class DataPerjalananController extends Controller
{
    //Method index()
    public function index() {
        return view('dataPerjalanan.index');
    }
}
