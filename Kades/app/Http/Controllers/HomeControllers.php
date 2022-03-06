<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllers extends Controller
{

    public function tanggal()
    {
        return view('admin.calender');
    }
    public function formulir()
    {
        return view('admin.formulir');
    }
    public function tabs()
    {
        return view('admin.tabs');
    }
}
