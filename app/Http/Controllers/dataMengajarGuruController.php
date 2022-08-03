<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataMengajarGuruController extends Controller
{
    public function index()
    {


        return view('Guru.Mengajar.dataMengajar');
    }
}
