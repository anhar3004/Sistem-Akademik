<?php

namespace App\Http\Controllers\WaliKelas;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class dataMengajarWaliKelasController extends Controller
{
    public function index()
    {
        return view('WaliKelas.Mengajar.dataMengajar');
    }

    public function dataTable()
    {

        $mengajar = DB::table('tb_mengajar')
            ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
            ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
            ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
            ->select('tb_mengajar.*', 'tb_pelajaran.*', 'tb_pelajaran.*', 'tb_kelas.*', 'tb_guru.*')
            ->where('username', Auth::user()->id_user)->orderBy(
                'tb_kelas.kelas',
                'asc'
            )->get();

        return response()->json($mengajar);
    }
}
