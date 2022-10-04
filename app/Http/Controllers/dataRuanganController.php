<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataRuanganController extends Controller
{
    public function index ()
    {
        $ruangan = \App\Models\ruangan::paginate(5);
        return view('Admin.Ruangan.dataRuangan',['ruangan' => $ruangan]);
    }

    public function dataTable ()
    {
        $ruangan = \App\Models\ruangan::orderBy('kd_ruangan','asc')->get();
        return response()->json($ruangan);
    }

    public function create(Request $request)
    {

        \App\Models\ruangan::create([

            'kd_ruangan' => $request->kd_ruangan,
            'ruangan' => $request->ruangan,
        ]);
    }

    public function edit ($id)
    {
        $ruangan = \App\Models\ruangan::where('id_ruangan',$id)->get();

      return response()->json($ruangan);

    }

    public function update(Request $request,$id)
    {
        $ruangan = \App\Models\ruangan::find($id);
        $ruangan->update([

            'kd_ruangan' => $request->kd_ruangan,
            'ruangan' => $request->ruangan,
            ]);
    }

    public function delete($id)
    {
        $ruangan = \App\Models\ruangan::find($id);
        $ruangan->delete();

    }
}
