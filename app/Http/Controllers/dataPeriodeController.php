<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataPeriodeController extends Controller
{
    public function index ()
    {
        $periode = \App\Models\periode::paginate(5);
        return view('Admin.Periode.dataPeriode',['periode' => $periode]);
    }

    public function dataTable ()
    {
        // $jadwal = \App\Models\jadwal::all();
        $periode = \App\Models\periode::all();
        // dd($jadwal);
        // return view('Admin.Jadwal.dataJadwal',['jadwal'=>$jadwal]);
        return response()->json($periode);
    }

    public function create(Request $request)
    {

        \App\Models\periode::create([

            'periode_awal' => $request->periode_awal,
            'periode_akhir' => $request->periode_akhir,


        ]);
    }

    public function edit ($id)
    {

        $periode = \App\Models\periode::where('id_periode',$id)->get();


    //   dd($jadwal);
      return response()->json($periode);

    }


    public function update(Request $request,$id)
    {
        \App\Models\periode::find($id)->update([

            'periode_awal' => $request->periode_awal,
            'periode_akhir' => $request->periode_akhir,


        ]);
    }

    public function delete($id)
    {
        $periode = \App\Models\periode::find($id);
        $periode->delete();

    }


}
