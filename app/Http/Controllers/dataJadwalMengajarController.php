<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class dataJadwalMengajarController extends Controller
{

    public function index()
    {
        // $guru = $request->session()->all();
        // $jadwal = \App\Models\jadwal::with('mengajar')->where('guru', Auth::user()->id_guru)->get();
        // $jadwal = DB::table('tb_jadwal')
        // ->join('tb_mengajar', 'tb_jadwal.mengajar', '=', 'tb_mengajar.id_mengajar')
        // ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
        // ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
        // ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
        // ->select('tb_jadwal.*', 'tb_mengajar.*','tb_kelas.*', 'tb_pelajaran.*','tb_guru.*')
        // ->where('username', Auth::user()->id_user)->get();

        return view('Guru.Jadwal.jadwalMengajar');
    }

    public function dataTable ()
    {
        $jadwal = DB::table('tb_jadwal')
        ->join('tb_mengajar', 'tb_jadwal.mengajar', '=', 'tb_mengajar.id_mengajar')
        ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
        ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
        ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
        ->select('tb_jadwal.*', 'tb_mengajar.*','tb_kelas.*', 'tb_pelajaran.*','tb_guru.*')
        ->where('username', Auth::user()->id_user)->orderBy('hari', 'desc'
            )->get();

        return response()->json($jadwal);
    }
}
