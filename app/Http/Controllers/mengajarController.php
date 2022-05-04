<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mengajarController extends Controller
{
    public function index ()
    {
        $mengajar = \App\Models\mengajar::paginate(5);
        $guru = \App\Models\guru::orderby('nama_lengkap','asc')->get();
        $pelajaran = \App\Models\pelajaran::orderby('nama_mapel','asc')->get();
        $kelas = \App\Models\kelas::orderby('kelas','asc')->get();
        return view('Admin.Mengajar.dataMengajar',['mengajar'=>$mengajar,'guru'=>$guru,'kelas'=>$kelas,'pelajaran'=>$pelajaran]);
    }

    public function dataTable()
    {

        $mengajar = DB::table('tb_mengajar')
        ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
        ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
        ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
        ->select('tb_mengajar.*', 'tb_pelajaran.kd_mapel','tb_pelajaran.nama_mapel', 'tb_kelas.kelas','tb_guru.nama_lengkap')
        ->orderby('tb_kelas.kelas', 'asc')->get();

        return response()->json($mengajar);
    }

    public function create(Request $request)
    {

        \App\Models\mengajar::create([

            'kelas' => $request->kelas,
            'mapel' => $request->mapel,
            'guru' => $request->guru,

        ]);
    }

    public function edit($id)
    {
        $mengajar = \App\Models\mengajar::where('id_mengajar', $id)->get();
        return response()->json($mengajar);
    }

    public function update(Request $request,$id)
    {
        $mengajar = \App\Models\mengajar::where('id_mengajar',$id);
        $mengajar->update([

            'kelas' => $request->kelas,
            'mapel' => $request->mapel,
            'guru' => $request->guru,
            ]);
    }

    public function delete($id)
    {
        $mengajar = \App\Models\mengajar::find($id);
        $mengajar->delete();
    }
}
