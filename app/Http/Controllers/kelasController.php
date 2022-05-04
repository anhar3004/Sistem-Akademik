<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index ()
    {
        $kelas = \App\Models\kelas::all();
        $ruangan = \App\Models\ruangan::where('ruangan','Ruang Kelas')->get();
        $guru = \App\Models\guru::all();
        return view('Admin.Kelas.dataKelas',['kelas' => $kelas,'ruangan' => $ruangan,'guru' => $guru]);
    }

    public function dataTable ()
    {
        // $jadwal = \App\Models\jadwal::all();
        // $kelas = \App\Models\kelas::all();
        $kelas = DB::table('tb_kelas')
        ->join('tb_ruangan', 'tb_kelas.ruangan', '=', 'tb_ruangan.id_ruangan')
        ->join('tb_guru', 'tb_kelas.walkes', '=', 'tb_guru.id_guru')
        ->select('tb_kelas.*', 'tb_ruangan.ruangan', 'tb_guru.nama_lengkap')
        ->get();
        // dd($jadwal);
        // return view('Admin.Jadwal.dataJadwal',['jadwal'=>$jadwal]);
        return response()->json($kelas);
    }

    public function create(Request $request)
    {

        \App\Models\kelas::create([

            'kelas' => $request->kelas,
            'ruangan' => $request->ruangan,
            'walkes' => $request->walkes,

        ]);

        return redirect('/kelas')->with('sukses','Data berhasil di tambahkan !');
    }

    public function edit ($id)
    {

        $kelas = \App\Models\kelas::where('id_kelas',$id)->get();


    //   dd($jadwal);
      return response()->json($kelas);

    }


    public function update(Request $request,$id)
    {
        $kelas = \App\Models\kelas::where('id_kelas',$id);
        $kelas->update([

            'kelas' => $request->kelas,
            'ruangan' => $request->ruangan,
            'walkes' => $request->walkes,
            ]);

    }

    public function delete($id)
    {
        $kelas = \App\Models\kelas::find($id);
        $kelas->delete();
        return redirect('/kelas')->with('sukses','Data berhasil di hapus !');
    }

    public function daftarSiswa ($id)
    {
        $siswa = \App\Models\siswa::where('kelas',$id)->get();

        // return redirect ('/kelas')->with('daftar','null')->with(['siswa'=> $siswa]);

        return response()->json($siswa);
    }
}
