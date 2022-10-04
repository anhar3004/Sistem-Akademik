<?php

namespace App\Http\Controllers\WaliKelas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class dataAbsensiController extends Controller
{
    public function index()
    {

        return view('WaliKelas.Absensi.absensiSiswa');
    }

    public function dataTable ()
    {

        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->first();

        $siswa = DB::table('tb_siswa')
        ->join('tb_kelas', 'tb_siswa.kelas', '=', 'tb_kelas.id_kelas')
        ->join('tb_guru', 'tb_kelas.walkes', '=', 'tb_guru.id_guru')
        ->select('tb_siswa.nama_lengkap','tb_siswa.id_siswa','tb_kelas.kelas','tb_guru.username')
        ->where('tb_guru.username', Auth::user()->id_user)
        // ->where('periode',$periode)
        ->orderBy('tb_siswa.nama_lengkap', 'asc')
        ->get();

        return response()->json($siswa);


    }

}
