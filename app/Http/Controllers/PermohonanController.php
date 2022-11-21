<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\Peserta;
use App\Models\UnitKompetensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PermohonanController extends Controller
{
    public function index()
    {
        if (request('mapel')) {
            $mapel = MataPelajaran::where('slug', request('mapel'))->first();
            if ($mapel == null) {
                return redirect('/permohonan-kompetensi');
            }
            return view('permohonan-kompetensi.data-diri');
        }

        return view('permohonan-kompetensi.index', [
            'mataPelajarans' => MataPelajaran::latest()->get()
        ]);
    }

    public function storeBioData(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'no_ktp' => 'required|digits:16|max:255|unique:pesertas',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'kebangsaan' => 'required|max:255',
            'alamat' => 'required',
            'kode_pos' => 'required|digits:5',
            'no_telepon' => 'required',
            'kualifikasi_pendidikan' => 'required|max:255',
        ]);

        Alert::success('Berhasil', 'Peserta Berhasil Didaftarkan');
        Peserta::create($validatedData);

        return redirect('/permohonan-kompetensi/data');
    }

    public function data()
    {
        return view('permohonan-kompetensi.data', [
            'unitKompetensis' => UnitKompetensi::with('jenis_standar')->latest()->get()
        ]);
    }

    public function bukti()
    {
        return view('permohonan-kompetensi.bukti');
    }

    public function assesmenMandiri()
    {
        return view('permohonan-kompetensi.assesmen-mandiri', [
            'unitKompetensis' => UnitKompetensi::latest()->get(),
        ]);
    }
}