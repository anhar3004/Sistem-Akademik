<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class dataNilaiGuruController extends Controller
{
    public function index()
    {
        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->get();
        return view('Guru.Nilai.dataNilai', ['periode' => $periode]);
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

    //Penilaian Harian
    public function formTambahNilaiPenilaianHarian($id)
    {
        $siswa = DB::table('tb_mengajar')
            ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
            ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
            ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
            ->join('tb_siswa', 'tb_kelas.id_kelas', '=', 'tb_siswa.kelas')
            ->select('tb_mengajar.*', 'tb_pelajaran.*', 'tb_pelajaran.*', 'tb_kelas.*', 'tb_guru.*', 'tb_siswa.*')
            ->where('id_mengajar', $id)->orderBy(
                'tb_siswa.nama_lengkap',
                'asc'
            )->get();

        return response()->json($siswa);
    }

    public function dataTablePenilaianHarian($id, $semester)
    {

        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->first();

        $nilai = DB::table('tb_penilaian_harian')
            ->join('tb_mengajar', 'tb_penilaian_harian.mapel', '=', 'tb_mengajar.id_mengajar')
            ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
            ->join('tb_siswa', 'tb_penilaian_harian.siswa', '=', 'tb_siswa.id_siswa')
            ->join('tb_periode', 'tb_penilaian_harian.periode', '=', 'tb_periode.id_periode')
            ->select('tb_penilaian_harian.*', 'tb_mengajar.*', 'tb_siswa.*', 'tb_periode.*', 'tb_pelajaran.*')
            ->where('tb_penilaian_harian.mapel', $id)->orderBy(
                'tb_siswa.nama_lengkap',
                'asc'
            )->where('periode', $periode->id_periode)->where('semester', $semester)->get();

        return response()->json($nilai);
    }

    public function createPenilaianHarian(Request $request)
    {
        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->get('id_periode')->first();

        $nilai = \App\Models\penilaian_harian::create([

            'periode' => $periode->id_periode,
            'semester' => $request->semester,
            'mapel' => $request->mapel,
            'kelas' => $request->kelas,
            'siswa' => $request->siswa,
            'PH1' => $request->PH1,
            'PH2' => $request->PH2,
            'PH3' => $request->PH3,
            'PH4' => $request->PH4,
            'PH5' => $request->PH5,
            'PH6' => $request->PH6,
            'PH7' => $request->PH7,
            'PH8' => $request->PH8,
        ]);

        $PH = \App\Models\penilaian_harian::where('id_penilaian_harian', $nilai->id_penilaian_harian)->get();
        foreach ($PH as $ph) {
            $penilaian_harian = collect([
                ['nilai' => $ph->PH1],
                ['nilai' => $ph->PH2],
                ['nilai' => $ph->PH3],
                ['nilai' => $ph->PH4],
                ['nilai' => $ph->PH5],
                ['nilai' => $ph->PH6],
                ['nilai' => $ph->PH7],
                ['nilai' => $ph->PH8]
            ]);
        };
        $RPH = $penilaian_harian->where('nilai', '!=', null)->avg('nilai');

        \App\Models\penilaian_harian::where('id_penilaian_harian', $nilai->id_penilaian_harian)->update([
            'RPH' => $RPH,
        ]);

         $HPA = ($RPH + 0 + 0) / 3;
         if ($HPA >= 90 & $HPA <= 100) {
             $predikat = 'A';
         } elseif ($HPA >= 80 & $HPA <= 90) {
             $predikat = 'B';
         } elseif ($HPA >= 70 & $HPA <= 80) {
             $predikat = 'C';
         } elseif ($HPA >= 60 & $HPA <= 70) {
             $predikat = 'D';
         }elseif ($HPA <= 60) {
             $predikat = 'E';
         }
        \App\Models\pengetahuan::create([
            'RPH' => $nilai->id_penilaian_harian,
           'PTS' => 0,
            'PAS' => 0,
            'HPA' => $HPA,
            'predikat' => $predikat,
        ]);
    }

    public function editPenilaianHarian($id)
    {
        $nilai = \App\Models\penilaian_harian::where('id_penilaian_harian', $id)->get();

        return response()->json($nilai);
    }

    public function updatePenilaianHarian(Request $request, $id)
    {
        \App\Models\penilaian_harian::where('id_penilaian_harian', $id)->update([
            'PH1' => $request->PH1,
            'PH2' => $request->PH2,
            'PH3' => $request->PH3,
            'PH4' => $request->PH4,
            'PH5' => $request->PH5,
            'PH6' => $request->PH6,
            'PH7' => $request->PH7,
            'PH8' => $request->PH8,
        ]);

        $PH = \App\Models\penilaian_harian::where('id_penilaian_harian', $id)->get();
        foreach ($PH as $ph) {
            $penilaian_harian = collect([
                ['nilai' => $ph->PH1],
                ['nilai' => $ph->PH2],
                ['nilai' => $ph->PH3],
                ['nilai' => $ph->PH4],
                ['nilai' => $ph->PH5],
                ['nilai' => $ph->PH6],
                ['nilai' => $ph->PH7],
                ['nilai' => $ph->PH8]
            ]);
        };
        $RPH = $penilaian_harian->where('nilai', '!=', null)->avg('nilai');
        \App\Models\penilaian_harian::where('id_penilaian_harian', $id)->update([
            'RPH' => $RPH,
        ]);

        $nilai = \App\Models\pengetahuan::where('RPH', $id)->get();
        foreach ($nilai as $ph) {

            $PTS = $ph->PTS;
            $PAS = $ph->PAS;
         };

        $HPA = ($RPH + $PTS + $PAS) / 3;
        if ($HPA >= 90 & $HPA <= 100) {
            $predikat = 'A';
        } elseif ($HPA >= 80 & $HPA <= 90) {
            $predikat = 'B';
        } elseif ($HPA >= 70 & $HPA <= 80) {
            $predikat = 'C';
        } elseif ($HPA >= 60 & $HPA <= 70) {
            $predikat = 'D';
        } elseif ($HPA <= 60) {
            $predikat = 'E';
        }

        \App\Models\pengetahuan::where('RPH', $id)->update([
            'HPA' => $HPA,
            'predikat' => $predikat,
        ]);


    }

    public function deletePenilaianHarian($id)
    {
        \App\Models\pengetahuan::where('RPH',$id)->delete();
        \App\Models\penilaian_harian::find($id)->delete();
    }

    // Pengetahuan
    public function dataTablePengetahuan($id, $semester)
    {

        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->first();

        $nilai = DB::table('tb_pengetahuan')
            ->join('tb_penilaian_harian', 'tb_pengetahuan.RPH', '=', 'tb_penilaian_harian.id_penilaian_harian')
            ->join('tb_mengajar', 'tb_penilaian_harian.mapel', '=', 'tb_mengajar.id_mengajar')
            ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
            ->join('tb_siswa', 'tb_penilaian_harian.siswa', '=', 'tb_siswa.id_siswa')
            ->join('tb_periode', 'tb_penilaian_harian.periode', '=', 'tb_periode.id_periode')
            ->select('tb_pengetahuan.*', 'tb_penilaian_harian.*','tb_mengajar.*', 'tb_siswa.*', 'tb_periode.*', 'tb_pelajaran.*')
            ->where('tb_penilaian_harian.mapel', $id)->orderBy(
                'tb_siswa.nama_lengkap',
                'asc'
            )->where('periode', $periode->id_periode)->where('semester', $semester)->get();

        return response()->json($nilai);
    }

    public function formTambahNilaiPengetahuan($id)
    {
        $siswa = DB::table('tb_mengajar')
            ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
            ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
            ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
            ->join('tb_siswa', 'tb_kelas.id_kelas', '=', 'tb_siswa.kelas')
            ->select('tb_mengajar.*', 'tb_pelajaran.*', 'tb_pelajaran.*', 'tb_kelas.*', 'tb_guru.*', 'tb_siswa.*')
            ->where('id_mengajar', $id)->orderBy(
                'tb_siswa.nama_lengkap',
                'asc'
            )->get();

        return response()->json($siswa);
    }

    public function createPengetahuan(Request $request)
    {
        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->get('id_periode')->first();


        $PH = \App\Models\penilaian_harian::where('periode', $periode->id_periode)->where('semester', $request->semester)->where('siswa', $request->siswa)->get();
        foreach ($PH as $ph) {
            $nilai = collect([
                ['nilai' => $ph->PH1],
                ['nilai' => $ph->PH2],
                ['nilai' => $ph->PH3],
                ['nilai' => $ph->PH4],
                ['nilai' => $ph->PH5],
                ['nilai' => $ph->PH6],
                ['nilai' => $ph->PH7],
                ['nilai' => $ph->PH8]
            ]);
        };

        $RPH = $nilai->where('nilai', '!=', null)->avg('nilai');
        $penilaian_harian = \App\Models\penilaian_harian::where('periode', $periode->id_periode)->where('semester', $request->semester)->where('siswa', $request->siswa)->value('id_penilaian_harian');

        $HPA = ($RPH + $request->PTS + $request->PAS) / 3;
        if ($HPA >= 90 & $HPA <= 100) {
            $predikat = 'A';
        } elseif ($HPA >= 80 & $HPA <= 90) {
            $predikat = 'B';
        } elseif ($HPA >= 70 & $HPA <= 80) {
            $predikat = 'C';
        } elseif ($HPA >= 60 & $HPA <= 70) {
            $predikat = 'D';
        }

        \App\Models\pengetahuan::create([

            'periode' => $periode->id_periode,
            'semester' => $request->semester,
            'mapel' => $request->mapel,
            'kelas' => $request->kelas,
            'siswa' => $request->siswa,
            'PH' => $penilaian_harian,
            'RPH' => $RPH,
            'PTS' => $request->PTS,
            'PAS' => $request->PAS,
            'HPA' => $HPA,
            'predikat' => $predikat,
        ]);

        // return response()->json($HPA);
    }

    public function editPengetahuan($id)
    {
        $nilai = DB::table('tb_pengetahuan')
        ->join('tb_penilaian_harian', 'tb_pengetahuan.RPH', '=', 'tb_penilaian_harian.id_penilaian_harian')
        ->select('tb_pengetahuan.*', 'tb_penilaian_harian.*')
        ->where('id_pengetahuan', $id)->get();

        return response()->json($nilai);
    }

    public function updatePengetahuan(Request $request, $id)
    {
        $nilai = DB::table('tb_pengetahuan')
        ->join('tb_penilaian_harian', 'tb_pengetahuan.RPH', '=', 'tb_penilaian_harian.id_penilaian_harian')
        ->select('tb_pengetahuan.*', 'tb_penilaian_harian.*')
        ->where('id_pengetahuan', $id)->get();

        foreach ($nilai as $ph) {
           $RPH = $ph->RPH;
        };

        $HPA = ($RPH + $request->PTS + $request->PAS) / 3;
        if ($HPA >= 90 & $HPA <= 100) {
            $predikat = 'A';
        } elseif ($HPA >= 80 & $HPA <= 90) {
            $predikat = 'B';
        } elseif ($HPA >= 70 & $HPA <= 80) {
            $predikat = 'C';
        } elseif ($HPA >= 60 & $HPA <= 70) {
            $predikat = 'D';
        }elseif ($HPA <= 60) {
            $predikat = 'E';
        }

        \App\Models\pengetahuan::find($id)->update([
            'PTS' => $request->PTS,
            'PAS' => $request->PAS,
            'HPA' => $HPA,
            'predikat' => $predikat,
        ]);

         return response()->json($HPA);
    }

    public function deletePengetahuan($id)
    {
        \App\Models\pengetahuan::find($id)->delete();
        \App\Models\penilaian_harian::where('id_penilaian_harian',$id)->delete();
    }

    // Keterampilan
    public function formTambahNilaiKeterampilan($id)
    {
        $siswa = DB::table('tb_mengajar')
            ->join('tb_kelas', 'tb_mengajar.kelas', '=', 'tb_kelas.id_kelas')
            ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
            ->join('tb_guru', 'tb_mengajar.guru', '=', 'tb_guru.id_guru')
            ->join('tb_siswa', 'tb_kelas.id_kelas', '=', 'tb_siswa.kelas')
            ->select('tb_mengajar.*', 'tb_pelajaran.*', 'tb_pelajaran.*', 'tb_kelas.*', 'tb_guru.*', 'tb_siswa.*')
            ->where('id_mengajar', $id)->orderBy(
                'tb_siswa.nama_lengkap',
                'asc'
            )->get();

        return response()->json($siswa);
    }

    public function dataTableKeterampilan($id, $semester)
    {

        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->first();

        $nilai = DB::table('tb_keterampilan')
            ->join('tb_mengajar', 'tb_keterampilan.mapel', '=', 'tb_mengajar.id_mengajar')
            ->join('tb_pelajaran', 'tb_mengajar.mapel', '=', 'tb_pelajaran.id_mapel')
            ->join('tb_siswa', 'tb_keterampilan.siswa', '=', 'tb_siswa.id_siswa')
            ->join('tb_periode', 'tb_keterampilan.periode', '=', 'tb_periode.id_periode')
            ->select('tb_keterampilan.*', 'tb_mengajar.*', 'tb_siswa.*', 'tb_periode.*', 'tb_pelajaran.*')
            ->where('tb_keterampilan.mapel', $id)->orderBy(
                'tb_siswa.nama_lengkap',
                'asc'
            )->where('periode', $periode->id_periode)->where('semester', $semester)->get();

        return response()->json($nilai);
    }

    public function createKeterampilan(Request $request)
    {
        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->get('id_periode')->first();

        $keterampilan = \App\Models\keterampilan::create([

            'periode' => $periode->id_periode,
            'semester' => $request->semester,
            'mapel' => $request->mapel,
            'kelas' => $request->kelas,
            'siswa' => $request->siswa,
            'K1' => $request->K1,
            'K2' => $request->K2,
            'K3' => $request->K3,
            'K4' => $request->K4,
            'K5' => $request->K5,
        ]);

        $nilai_akhir = \App\Models\keterampilan::where('id_keterampilan', $keterampilan->id_keterampilan)->get();
        foreach ($nilai_akhir as $K) {
            $nilai = collect([
                ['nilai' => $K->K1],
                ['nilai' => $K->K2],
                ['nilai' => $K->K3],
                ['nilai' => $K->K4],
                ['nilai' => $K->K5]
            ]);
        };

        $HPA = $nilai->where('nilai', '!=', null)->avg('nilai');
        if ($HPA >= 90 & $HPA <= 100) {
            $predikat = 'A';
        } elseif ($HPA >= 80 & $HPA <= 90) {
            $predikat = 'B';
        } elseif ($HPA >= 70 & $HPA <= 80) {
            $predikat = 'C';
        } elseif ($HPA >= 60 & $HPA <= 70) {
            $predikat = 'D';
        }

        \App\Models\keterampilan::where('id_keterampilan', $keterampilan->id_keterampilan)->update([
            'HPA' => $HPA,
            'predikat' => $predikat,
        ]);
    }

    public function editKeterampilan($id)
    {
        $nilai = \App\Models\keterampilan::where('id_keterampilan', $id)->get();

        return response()->json($nilai);
    }

    public function updateKeterampilan(Request $request, $id)
    {
        \App\Models\keterampilan::where('id_keterampilan', $id)->update([
            'K1' => $request->K1,
            'K2' => $request->K2,
            'K3' => $request->K3,
            'K4' => $request->K4,
            'K5' => $request->K5,
        ]);

        $nilai_akhir = \App\Models\keterampilan::where('id_keterampilan', $id)->get();
        foreach ($nilai_akhir as $K) {
            $nilai = collect([
                ['nilai' => $K->K1],
                ['nilai' => $K->K2],
                ['nilai' => $K->K3],
                ['nilai' => $K->K4],
                ['nilai' => $K->K5]
            ]);
        };
        $HPA = $nilai->where('nilai', '!=', null)->avg('nilai');

        if ($HPA >= 90 & $HPA <= 100) {
            $predikat = 'A';
        } elseif ($HPA >= 80 & $HPA <= 90) {
            $predikat = 'B';
        } elseif ($HPA >= 70 & $HPA <= 80) {
            $predikat = 'C';
        } elseif ($HPA >= 60 & $HPA <= 70) {
            $predikat = 'D';
        }

        \App\Models\keterampilan::where('id_keterampilan', $id)->update([
            'HPA' => $HPA,
            'predikat' => $predikat,
        ]);
    }

    public function deleteKeterampilan($id)
    {
        $nilai = \App\Models\keterampilan::find($id);
        $nilai->delete();
    }
}
