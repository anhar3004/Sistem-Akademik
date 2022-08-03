<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataRaporController extends Controller
{
    public function index ()
    {
        return view('Admin.Rapor.dataRapor');
    }
}
