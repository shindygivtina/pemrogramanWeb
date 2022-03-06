<?php

namespace App\Http\Controllers;

use App\Models\Bumil;
use Illuminate\Http\Request;

class BumilController extends Controller
{
    public function index()
    {
        $data = Bumil::all();
        //dd($data);
        return view('admin.tableBumil', compact('data'));
    }
    public function insertdataBumil(Request $request)
    {
        //dd($request->all());
        Bumil::create($request->all());
        return redirect()->route('tableBumil')->with('Sukses', 'Data Berhasil Di Tambahkan!');
    }


    public function tampilanDataBumil($id)
    {

        $data = Bumil::find($id);
        //dd($data);
        return view('admin.dataBumil', compact('data'));
    }

    public function updateDataBumil(Request $request, $id)
    {
        $data = Bumil::find($id);
        $data->update($request->all());
        return redirect()->route('tableBumil')->with('Sukses', 'Data Berhasil Di Update!');
    }

    public function deleteDataBumil($id)
    {
        $data = Bumil::find($id);
        $data->delete();
        return redirect()->route('tableBumil')->with('Sukses', 'Data Berhasil Di Hapus!');
    }
}
