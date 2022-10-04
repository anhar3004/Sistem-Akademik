<?php

namespace App\Http\Controllers\WaliKelas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class waliKelasController extends Controller
{
    public function index()
    {
        $guru = \App\Models\WaliKelas::where('username', Auth::user()->id_user)->get();

        return view('WaliKelas.home', ['guru' => $guru]);

        // return view('WaliKelas.home');
    }
}
