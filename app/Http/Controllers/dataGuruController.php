<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataGuruController extends Controller
{
    public function index ()
    {
        $guru = \App\Models\guru::all();
        return view('Admin.Guru.dataGuru',['guru' => $guru]);
    }

    public function dataTable ()
    {

        $guru = \App\Models\guru::orderby('nama_lengkap','asc')->get();

        return response()->json($guru);
    }

    public function create(Request $request)
    {
        $user = \App\Models\User::create([
            'username' => $request->username,
            'password' => bcrypt('@MIESA'),
            'level'=>'Guru',
        ]);

       $guru = \App\Models\guru::create([

            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'foto' => $request->foto,
            'username' => $user->id_user,

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


        $user = \App\Models\User::where('id_user', $guru->username);
        $user->delete();
    }

    public function detail ($id)
    {
        $guru = \App\Models\guru::where('id_guru',$id)->get();
        return response()->json($guru);
    }
}
