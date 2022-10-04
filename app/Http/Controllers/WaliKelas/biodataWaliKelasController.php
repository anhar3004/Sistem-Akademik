<?php

namespace App\Http\Controllers\WaliKelas;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class biodataWaliKelasController extends Controller
{
    public function index()
    {
        // $guru = $request->session()->all();
        $guru = \App\Models\walikelas::where('username', Auth::user()->id_user)->get();
        return view('WaliKelas.Biodata.biodata', ['guru' => $guru]);
    }

    public function detail ()
    {
        $guru = \App\Models\walikelas::where('username', Auth::user()->id_user)->get();
        return response()->json($guru);
    }

    public function edit ($id)
    {
        $guru = \App\Models\walikelas::where('id_guru',$id)->get();

        return response()->json($guru);
    }

    public function update(Request $request,$id)
    {
        $guru = \App\Models\walikelas::find($id);
        $guru->update([

            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'foto' => $request->foto,
            ]);
    }


}
