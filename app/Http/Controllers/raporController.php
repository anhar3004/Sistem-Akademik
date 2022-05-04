<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class raporController extends Controller
{
    public function index ()
    {
        return view('Admin.Rapor.dataRapor');
    }
}
