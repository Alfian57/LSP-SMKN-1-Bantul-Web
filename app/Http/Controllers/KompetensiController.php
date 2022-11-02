<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    public function index()
    {
        return view('permohonan-kompetensi.index');
    }

    public function data()
    {
        return view('permohonan-kompetensi.data');
    }

    public function storeData(Request $request)
    {
        return redirect('/permohonan-kompetensi/data');
    }

    public function bukti()
    {
        return view('permohonan-kompetensi.bukti');
    }
}