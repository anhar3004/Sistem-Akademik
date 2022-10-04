<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dataKelasController extends Controller
{
    public function index()
    {
        $kelas = \App\Models\kelas::all();
        $ruangan = \App\Models\ruangan::where('ruangan', 'Ruang Kelas')->get();
        $guru = \App\Models\guru::all();
        return view('Admin.Kelas.dataKelas', ['kelas' => $kelas, 'ruangan' => $ruangan, 'guru' => $guru]);
    }

    public function dataTable()
    {

        $kelas = DB::table('tb_kelas')
            ->join('tb_ruangan', 'tb_kelas.ruangan', '=', 'tb_ruangan.id_ruangan')
            ->join('tb_guru', 'tb_kelas.walkes', '=', 'tb_guru.id_guru')
            ->select('tb_kelas.*', 'tb_ruangan.ruangan', 'tb_guru.nama_lengkap')
            ->get();

        return response()->json($kelas);
    }

    public function create(Request $request)
    {

        \App\Models\kelas::create([

            'kelas' => $request->kelas,
            'ruangan' => $request->ruangan,
            'walkes' => $request->walkes,

        ]);

        $walkes = \App\Models\Guru::find($request->walkes);
        $user = \App\Models\User::where('id_user', $walkes->username);
        $user->update([
            'level' => 'Walkes',
        ]);


    }

    public function edit($id)
    {

        $kelas = \App\Models\kelas::where('id_kelas', $id)->get();


        //   dd($jadwal);
        return response()->json($kelas);
    }


    public function update(Request $request, $id)
    {

        $kelas = \App\Models\kelas::find($id);

        $Guru = \App\Models\Guru::find($kelas->walkes);
        $user_guru = \App\Models\User::where('id_user', $Guru->username);

        $walkes = \App\Models\Guru::find($request->walkes);
        $user = \App\Models\User::where('id_user', $walkes->username);

        if ($kelas->walkes == $request->walkes) {
            $kelas->update([

                'kelas' => $request->kelas,
                'ruangan' => $request->ruangan,
                'walkes' => $request->walkes,
            ]);
        } else {
            $kelas->update([

                'kelas' => $request->kelas,
                'ruangan' => $request->ruangan,
                'walkes' => $request->walkes,
            ]);

            $user_guru->update([
                'level' => 'Guru',
            ]);

            $user->update([
                'level' => 'Walkes',
            ]);
        };

    }

    public function delete($id)
    {
        $kelas = \App\Models\kelas::find($id);
        $kelas->delete();

    }

    public function daftarSiswa($id)
    {
        $siswa = \App\Models\siswa::where('kelas', $id)->get();
        return response()->json($siswa);
    }
}
