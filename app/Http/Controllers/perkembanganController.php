<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perkembanganController extends Controller
{
    public function index ()
    {
        return view('Admin.Perkembangan.dataPerkembangan');
    }
}
