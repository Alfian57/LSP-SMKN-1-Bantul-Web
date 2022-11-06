<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function index()
    {
        if (request('mapel')) {
            $mapel = MataPelajaran::where('slug', request('mapel'))->first();
            if ($mapel == null) {
                return redirect('/permohonan-kompetensi');
            }
            return view('permohonan-kompetensi.index');
        }

        return view('permohonan-kompetensi.index', [
            'mataPelajarans' => MataPelajaran::latest()->get()
        ]);
    }

    public function data()
    {
        return view('permohonan-kompetensi.data');
    }

    public function storeData(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'no_ktp' => 'required|digits:16|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'kebangsaan' => 'required|max:255',
            'alamat' => 'required',
            'kode_post' => 'required|digits:5',
            'no_telepon' => 'required|digits',
            'kualiifikasi_pendidikan' => 'required|max:255',
        ]);

        return redirect('/permohonan-kompetensi/data');
    }

    public function bukti()
    {
        return view('permohonan-kompetensi.bukti');
    }
}