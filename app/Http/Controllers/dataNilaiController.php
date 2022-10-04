<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataNilaiController extends Controller
{
    public function indexAdmin ()
    {
        return view('Admin.Nilai.dataNilai');
    }
}


