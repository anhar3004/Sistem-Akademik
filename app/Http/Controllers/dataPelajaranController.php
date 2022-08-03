<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dataPelajaranController extends Controller
{
    public function index()
    {
        $pelajaran = \App\Models\pelajaran::all();
        return view('Admin.Pelajaran.dataPelajaran', ['pelajaran' => $pelajaran]);
    }

    public function noUrut()
    {

        $AWAL = 'MPL';
        $noUrutAkhir = \App\Models\pelajaran::max('id_mapel');
        $no = 1;
        // $noUrutAkhir = sprintf("%03s", ($id + 1)). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');

        if ($noUrutAkhir) {
            $id = $AWAL . sprintf("%03s", abs($noUrutAkhir + 1));
            $noUrutAkhir = $id;
        } else {
            // $id =  $AWAL .sprintf("%03s", abs($noUrutAkhir + 1));
            // $noUrutAkhir = $id;
            $id =  $AWAL . sprintf("%03s", $no);
            $noUrutAkhir = $id;
        }

        return $noUrutAkhir;
    }

    public function dataTable()
    {

        $pelajaran = DB::table('tb_pelajaran')->orderby('muatan', 'asc')->get();

        return response()->json($pelajaran);
    }

    public function create(Request $request)
    {

        \App\Models\pelajaran::create([

            'kd_mapel' => $request->kd_mapel,
            'nama_mapel' => $request->nama_mapel,
            'muatan' => $request->muatan,
            'kkm' => $request->kkm,

        ]);
    }

    public function edit($id)
    {
        $pelajaran = \App\Models\pelajaran::where('id_mapel', $id)->get();
        return response()->json($pelajaran);
    }

    public function update(Request $request, $id)
    {
        $pelajaran = \App\Models\pelajaran::where('id_mapel', $id);
        $pelajaran->update([

            'kd_mapel' => $request->kd_mapel,
            'nama_mapel' => $request->nama_mapel,
            'muatan' => $request->muatan,
            'kkm' => $request->kkm,
        ]);
    }

    public function delete($id)
    {
        $pelajaran = \App\Models\pelajaran::find($id);
        $pelajaran->delete();
    }
}
