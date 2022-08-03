<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jadwal;

class dataJadwalController extends Controller
{
    public function index ()
    {
        $kelas = \App\Models\kelas::all()->sortBy('kelas');
        $jadwal = DB::table('tb_jadwal')
        ->join('tb_mengajar', 'tb_jadwal.mengajar', '=', 'tb_mengajar.id_mengajar')
        ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
        ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
        ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
        ->select('tb_jadwal.*', 'tb_mengajar.id_mengajar','tb_kelas.kelas', 'tb_pelajaran.nama_mapel','tb_guru.nama_lengkap')
        ->get();
        return view('Admin.Jadwal.index',['kelas'=>$kelas,'jadwal'=>$jadwal]);

    }

    public function daftar ()
    {
        // $jadwal = \App\Models\jadwal::all();
        $jadwal = DB::table('tb_jadwal')
        ->join('tb_mengajar', 'tb_jadwal.mengajar', '=', 'tb_mengajar.id_mengajar')
        ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
        ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
        ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
        ->select('tb_jadwal.*', 'tb_mengajar.id_mengajar','tb_kelas.kelas', 'tb_pelajaran.nama_mapel','tb_guru.nama_lengkap')
        ->get();
        // dd($jadwal);
        // return view('Admin.Jadwal.dataJadwal',['jadwal'=>$jadwal]);
        return response()->json($jadwal);
    }


    public function DataPelajaran ($id)
    {
        // $mengajar = \App\Models\mengajar::where('kelas',$id)->get();
        $mengajar = DB::table('tb_mengajar')
            ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
            ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
            ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
            ->select('tb_mengajar.*', 'tb_kelas.id_kelas', 'tb_pelajaran.nama_mapel','tb_guru.nama_lengkap')
            ->where('id_kelas',$id)->get();
        // $mengajar = \App\Models\mengajar::all();
        // dd($mengajar);
        return response()->json($mengajar);
    }

    public function DataPengajar ($id)
    {
        // $mengajar = \App\Models\mengajar::where('kelas',$id)->get();
        $mengajar = DB::table('tb_mengajar')
            ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
            ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
            ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
            ->select('tb_mengajar.*', 'tb_kelas.id_kelas', 'tb_pelajaran.nama_mapel','tb_guru.nama_lengkap')
            ->where('id_mengajar',$id)->get();
        // $mengajar = \App\Models\mengajar::all();
    //    dd($mengajar);
        return response()->json($mengajar);
    }

    public function create(Request $request)
    {

         \App\Models\jadwal::create([

            'mengajar' => $request->mengajar,
            'semester' => $request->semester,
            'hari' => $request->hari,
            'jam_ke' => $request->jam_ke,
            'jam_awal' => $request->jam_awal,
            'jam_akhir' => $request->jam_akhir,
            'jumlah_menit' => $request->jumlah_menit,

        ]);
    }


    public function ubahJadwal ($id)
    {

        $jadwal = DB::table('tb_jadwal')
        ->join('tb_mengajar', 'tb_jadwal.mengajar', '=', 'tb_mengajar.id_mengajar')
        ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
        ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
        ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
        ->select('tb_jadwal.*', 'tb_mengajar.id_mengajar','tb_kelas.kelas', 'tb_pelajaran.nama_mapel','tb_guru.nama_lengkap')
        ->where('id_jadwal',$id)->get();

    //   dd($jadwal);
      return response()->json($jadwal);

    }

    public function update(Request $request,$id)
    {
        \App\Models\jadwal::find($id)->update([

            'mengajar' => $request->mengajar,
            'semester' => $request->semester,
            'hari' => $request->hari,
            'jam_ke' => $request->jam_ke,
            'jam_awal' => $request->jam_awal,
            'jam_akhir' => $request->jam_akhir,
            'jumlah_menit' => $request->jumlah_menit,

        ]);
    }

    public function delete($id)
    {
        $jadwal = \App\Models\jadwal::find($id);
        $jadwal->delete();
    }
}
