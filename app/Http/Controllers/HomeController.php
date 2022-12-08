<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('home.beranda');
    }

    public function visiMisi()
    {
        return view('home.visi-misi');
    }

    public function strukturOrganisasi()
    {
        return view('home.struktur-organisasi');
    }

    public function skemaSertifikasi()
    {
        return view('home.skema-sertifikasi');
    }

    public function detail1()
    {
        return view('home.detail1');
    }

    public function detail2()
    {
        return view('home.detail2');
    }

    public function detail3()
    {
        return view('home.detail3');
    }

    public function tempatUjiKompetensi()
    {
        return view('home.tempat-uji-kompetensi');
    }

    public function kontak()
    {
        return view('home.kontak');
    }
}