<?php

namespace App\Http\Controllers\WaliKelas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dataPerkembanganWaliKelasController extends Controller
{
    public function index()
    {
        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->get();
        return view('WaliKelas.perkembangan.dataPerkembangan', ['periode' => $periode]);
    }

    public function dataTable()
    {

        $kelas = DB::table('tb_guru')
            ->join('tb_kelas', 'tb_kelas.walkes', '=', 'tb_guru.id_guru')
            ->join('tb_siswa', 'tb_kelas.id_kelas', '=', 'tb_siswa.kelas')
            ->select('tb_siswa.*','tb_kelas.*')
            ->where('tb_guru.username', Auth::user()->id_user)
            ->orderBy(
                'tb_siswa.nama_lengkap',
                'asc'
            )
            ->get();
        return response()->json($kelas);
    }

    public function formTambahSpiritual($id)
    {
        $siswa = DB::table('tb_siswa')
            ->join('tb_kelas', 'tb_siswa.id_siswa', '=', 'tb_kelas.kelas')
            ->select('tb_siswa.*')
            ->where('id_siswa', $id)
            ->get();

        return response()->json($siswa);
    }

    public function dataTableSpiritual($id, $semester)
    {

        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->first();

        $nilai = DB::table('tb_spiritual')
            ->join('tb_siswa', 'tb_spiritual.siswa', '=', 'tb_siswa.id_siswa')
            ->join('tb_kelas', 'tb_spiritual.kelas', '=', 'tb_kelas.id_kelas')
            ->join('tb_periode', 'tb_spiritual.periode', '=', 'tb_periode.id_periode')
            ->select('tb_spiritual.*', 'tb_siswa.*', 'tb_periode.*', 'tb_kelas.*')
            ->where('tb_spiritual.siswa', $id)->where('periode', $periode->id_periode)->where('semester', $semester)->get();

        return response()->json($nilai);
    }

    public function createSpiritual(Request $request)
    {
        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
            )->get('id_periode')->first();


        $nilai = \App\Models\spiritual::create([

            'periode' => $periode->id_periode,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'siswa' => $request->siswa,
            'aspek_spiritual' => $request->aspek_spiritual,
            'nilai' => $request->nilai,
            'predikat' => $request->predikat,
            'deskripsi' => $request->deskripsi,
        ]);

    }

    public function editSpiritual($id)
    {
        $nilai = \App\Models\spiritual::where('id_spiritual', $id)->get();

        return response()->json($nilai);
    }

    public function updateSpiritual(Request $request, $id)
    {

        \App\Models\spiritual::where('id_spiritual', $id)->update([
            'aspek_spiritual' => $request->aspek_spiritual,
            'nilai' => $request->nilai,
            'predikat' => $request->predikat,
            'deskripsi' => $request->deskripsi,
        ]);
    }

    public function deleteSpiritual($id)
    {
        \App\Models\spiritual::find($id)->delete();
    }

    // Aspek Emosional
    public function formTambahEmosional($id)
    {
        $siswa = DB::table('tb_siswa')
            ->join('tb_kelas', 'tb_siswa.id_siswa', '=', 'tb_kelas.kelas')
            ->select('tb_siswa.*')
            ->where('id_siswa', $id)
            ->get();

        return response()->json($siswa);
    }

    public function dataTableEmosional($id, $semester)
    {

        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->first();

        $nilai = DB::table('tb_emosional')
            ->join('tb_siswa', 'tb_emosional.siswa', '=', 'tb_siswa.id_siswa')
            ->join('tb_kelas', 'tb_emosional.kelas', '=', 'tb_kelas.id_kelas')
            ->join('tb_periode', 'tb_emosional.periode', '=', 'tb_periode.id_periode')
            ->select('tb_emosional.*', 'tb_siswa.*', 'tb_periode.*', 'tb_kelas.*')
            ->where('tb_emosional.siswa', $id)->where('periode', $periode->id_periode)->where('semester', $semester)->get();

        return response()->json($nilai);
    }

    public function createEmosional(Request $request)
    {
        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
            )->get('id_periode')->first();

            $siswa = \App\Models\siswa::find($request->siswa);

        $nilai = \App\Models\emosional::create([

            'periode' => $periode->id_periode,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'siswa' => $request->siswa,
            'aspek_emosional' => $request->aspek_emosional,
            'nilai' => $request->nilai,
            'predikat' => $request->predikat,
            'deskripsi' => $request->deskripsi,
        ]);

    }

    public function editEmosional($id)
    {
        $nilai = \App\Models\Emosional::where('id_Emosional', $id)->get();

        return response()->json($nilai);
    }

    public function updateEmosional(Request $request, $id)
    {
        $siswa = \App\Models\siswa::find($request->id_siswa);



        \App\Models\emosional::where('id_emosional', $id)->update([
            'aspek_emosional' => $request->aspek_emosional,
            'nilai' => $request->nilai,
            'predikat' => $request->predikat,
            'deskripsi' => $request->deskripsi,
        ]);
    }

    public function deleteEmosional($id)
    {
        \App\Models\emosional::find($id)->delete();
    }

    // Aspek Akal

    public function dataTableAkal($id, $semester)
    {

        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->first();

             $nilai_pengetahuan =  $nilai = DB::table('tb_penilaian_harian')
              ->join('tb_pengetahuan', 'tb_penilaian_harian.id_penilaian_harian', '=', 'tb_pengetahuan.RPH')
             ->select('tb_pengetahuan.HPA')
                ->where('tb_penilaian_harian.periode', $periode->id_periode)->where('tb_penilaian_harian.semester', $semester)
                ->where('tb_penilaian_harian.siswa', $id)
                ->avg('HPA');

            $nilai_keterampilan = DB::table('tb_keterampilan')
            ->join('tb_siswa', 'tb_keterampilan.siswa', '=', 'tb_siswa.id_siswa')
            ->select('tb_siswa.nis','tb_siswa.nama_lengkap','tb_siswa.kelas','tb_keterampilan.HPA')
            ->where('tb_keterampilan.siswa', $id)->where('tb_keterampilan.periode', $periode->id_periode)->where('tb_keterampilan.semester', $semester)
            ->avg('HPA');

            // $siswa= DB::table('tb_keterampilan')
            // ->join('tb_siswa', 'tb_keterampilan.siswa', '=', 'tb_siswa.id_siswa')
            // ->select('tb_siswa.nis','tb_siswa.nama_lengkap','tb_siswa.kelas','tb_keterampilan.HPA')
            // ->where('tb_keterampilan.siswa', $id)->where('tb_keterampilan.periode', $periode->id_periode)->where('tb_keterampilan.semester', $semester)
            // ->get();

            $siswa= DB::table('tb_siswa')
            // ->join('tb_keterampilan', 'tb_keterampilan.siswa', '=', 'tb_siswa.id_siswa')
            ->select('tb_siswa.nis','tb_siswa.nama_lengkap','tb_siswa.kelas')
            ->where('id_siswa', $id)
            ->get();

            $nilai_akhir = ($nilai_pengetahuan + $nilai_keterampilan)/2;
            // foreach ($siswa as $row) {

            //     $nis = $row->nis;
            //     $nama_lengkap = $row->nama_lengkap;
            //     $kelas = $row->kelas;
            //  };


             if($siswa){
                foreach ($siswa as $row) {

                    $nis = $row->nis;
                    $nama_lengkap = $row->nama_lengkap;
                    $kelas = $row->kelas;
                 };
            }

            // dd($siswa);

            // $siswa = \App\Models\siswa::find($id);


            if($id && $semester == "undefined" ){
                $data_array = [
                ];
                $collection = collect($data_array);
                $collection->all();
            }else{
                $data_array = [
                    [ 'nis' => $nis,
                    'nama' => $nama_lengkap,
                    'nilai_pengetahuan' =>$nilai_pengetahuan,
                    'nilai_keterampilan' => $nilai_keterampilan,
                    'nilai_akhir' => $nilai_akhir],
                ];

                $collection = collect($data_array);
                $collection->all();
            }


        // $data = collect([

        // ],
        // [
        //     'nis' => 1,
        //     'nama' => $siswa->nama_lengkap,
        //     'kelas' => $siswa->kelas,
        //     'nilai_pengetahuan' =>$nilai_pengetahuan,
        //     'nilai_Keterampilan' => $nilai_Keterampilan,
        //     'nilai_akhir' => $nilai_akhir,
        // ]);

        return response()->json($collection);
    }

      // Saran

    public function dataTableSaran($id, $semester)
    {

        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
        )->first();

        $saran = DB::table('tb_saran')
            ->join('tb_siswa', 'tb_saran.siswa', '=', 'tb_siswa.id_siswa')
            ->join('tb_kelas', 'tb_saran.kelas', '=', 'tb_kelas.id_kelas')
            ->join('tb_periode', 'tb_saran.periode', '=', 'tb_periode.id_periode')
            ->select('tb_saran.*', 'tb_siswa.*', 'tb_periode.*', 'tb_kelas.*')
            ->where('tb_saran.siswa', $id)->where('periode', $periode->id_periode)->where('semester', $semester)->get();

        return response()->json($saran);
    }

    public function formTambahSaran($id)
    {
        $siswa = DB::table('tb_siswa')
            ->join('tb_kelas', 'tb_siswa.id_siswa', '=', 'tb_kelas.kelas')
            ->select('tb_siswa.*')
            ->where('id_siswa', $id)
            ->get();

        return response()->json($siswa);
    }

    public function createSaran(Request $request)
    {
        $periode = \App\Models\periode::orderBy(
            'id_periode',
            'desc'
            )->get('id_periode')->first();


        $nilai = \App\Models\saran::create([

            'periode' => $periode->id_periode,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'siswa' => $request->siswa,
            'saran_emosional' => $request->saran_emosional,
            'saran_spiritual' => $request->saran_spiritual,
            'saran_akal' => $request->saran_akal
        ]);

    }

    public function editSaran($id)
    {
        $saran = \App\Models\saran::where('id_saran', $id)->get();

        return response()->json($saran);
    }

    public function updateSaran(Request $request, $id)
    {
        $siswa = \App\Models\siswa::find($request->id_siswa);



        \App\Models\saran::where('id_saran', $id)->update([
            'saran_emosional' => $request->saran_emosional,
            'saran_spiritual' => $request->saran_spiritual,
            'saran_akal' => $request->saran_akal
        ]);
    }

    public function deleteSaran($id)
    {
        \App\Models\saran::find($id)->delete();
    }
}
