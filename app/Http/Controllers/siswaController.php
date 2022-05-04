<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index ()
    {
        $siswa = \App\Models\siswa::all();
        $kelas = \App\Models\kelas::orderBy('kelas', 'asc')->get();

        return view('Admin.Siswa.dataSiswa',['siswa' => $siswa,'kelas' => $kelas]);
    }

    public function dataTable ()
    {
        // $jadwal = \App\Models\jadwal::all();
        // $kelas = \App\Models\kelas::all();
        $siswa = DB::table('tb_siswa')
        ->join('tb_kelas', 'tb_siswa.kelas', '=', 'tb_kelas.id_kelas')
        ->select('tb_siswa.*', 'tb_kelas.kelas')
        ->orderBy('nama_lengkap', 'asc')->get();
        // dd($jadwal);
        // return view('Admin.Jadwal.dataJadwal',['jadwal'=>$jadwal]);
        return response()->json($siswa);
    }



    public function create(Request $request)
    {

        \App\Models\siswa::create([

            'kelas' => $request->kelas,
            'nis' => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tanggal_diterima' => $request->tanggal_diterima,
            'dikelas' => $request->dikelas,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_wali' => $request->nama_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat_wali' => $request->alamat_wali,
            'no_hp_wali' => $request->no_hp_wali,
        ]);

    }

    public function edit ($id)
    {
        $siswa = \App\Models\siswa::where('id_siswa',$id)->get();
// dd($siswa);
        return response()->json($siswa);
    }

    public function detail ($id)
    {  $siswa = DB::table('tb_siswa')
        ->join('tb_kelas', 'tb_siswa.kelas', '=', 'tb_kelas.id_kelas')
        ->select('tb_siswa.*', 'tb_kelas.kelas')
        ->where('id_siswa',$id)->get();

        return response()->json($siswa);
    }

    public function update(Request $request,$id)
    {
        $siswa = \App\Models\siswa::find($id);
        $siswa->update([

            'kelas' => $request->kelas,
            'nis' => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tanggal_diterima' => $request->tanggal_diterima,
            'dikelas' => $request->dikelas,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_wali' => $request->nama_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat_wali' => $request->alamat_wali,
            'no_hp_wali' => $request->no_hp_wali,

            ]);

    }

    public function delete($id)
    {
        $siswa = \App\Models\siswa::find($id);
        $siswa->delete();
    }
}

