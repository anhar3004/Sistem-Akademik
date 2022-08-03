<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataNilaiController extends Controller
{
    public function indexAdmin ()
    {
        return view('Admin.Nilai.dataNilai');
    }

    public function indexGuru ()
    {
        return view('Guru.Nilai.dataNilai');
    }
}


