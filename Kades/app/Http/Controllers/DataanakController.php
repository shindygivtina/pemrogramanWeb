<?php

namespace App\Http\Controllers;

use App\Models\Dataanak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DataanakController extends Controller
{
    public function index()
    {
        $data = Dataanak::all();
        //dd($data);
        return view('admin.table', compact('data'));
    }

    public function insertdata(Request $request)
    {
        //dd($request->all());
        Dataanak::create($request->all());
        return redirect()->route('table')->with('Sukses', 'Data Berhasil Di Tambahkan!');
    }

    public function tampilanData($id)
    {

        $data = Dataanak::find($id);
        //dd($data);
        return view('admin.dataAnak', compact('data'));
    }

    public function updateData(Request $request, $id)
    {
        $data = Dataanak::find($id);
        $data->update($request->all());
        return redirect()->route('table')->with('Sukses', 'Data Berhasil Di Update!');
    }

    public function deleteData($id)
    {
        $data = Dataanak::find($id);
        $data->delete();
        return redirect()->route('table')->with('Sukses', 'Data Berhasil Di Hapus!');
    }
}
