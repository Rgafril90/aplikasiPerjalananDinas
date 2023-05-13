<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    //Method Index()
    public function index() {
        return view('dashboard.index');
    }
    
}
