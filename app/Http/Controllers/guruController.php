<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index ()
    {
        $guru = \App\Models\guru::where('username', Auth::user()->id_user)->get();

        return view('Guru.home', ['guru' => $guru]);

    }
}
