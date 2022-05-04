<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nilaiController extends Controller
{
    public function index ()
    {
        return view('Admin.Nilai.dataNilai');
    }
}

