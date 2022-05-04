<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index ()
    {
        $guru = \App\Models\guru::paginate(5);
        return view('Admin.Guru.dataGuru',['guru' => $guru]);
    }

    public function dataTable ()
    {
        $siswa = \App\Models\siswa::all();
        $guru = \App\Models\guru::orderby('nama_lengkap','asc')->get();

        return response()->json([$guru,$siswa]);
    }

    public function create(Request $request)
    {

        \App\Models\guru::create([

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

    public function edit ($id)
    {
        $guru = \App\Models\guru::where('id_guru',$id)->get();
        return response()->json($guru);


    }
    public function update(Request $request,$id)
    {
        $guru = \App\Models\guru::find($id);
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

    public function delete($id)
    {
        $guru = \App\Models\guru::find($id);
        $guru->delete();
    }

    public function detail ($id)
    {
        $guru = \App\Models\guru::where('id_guru',$id)->get();
        return response()->json($guru);
    }
}
