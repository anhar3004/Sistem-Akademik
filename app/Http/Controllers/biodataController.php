<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class biodataController extends Controller
{
    public function index()
    {
        // $guru = $request->session()->all();
        $guru = \App\Models\guru::where('username', Auth::user()->id_user)->get();
        return view('Guru.Biodata.biodata', ['guru' => $guru]);
    }

    public function detail ()
    {
        $guru = \App\Models\guru::where('username', Auth::user()->id_user)->get();
        return response()->json($guru);
    }
}
