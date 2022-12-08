<?php

namespace App\Http\Controllers;

use App\Models\JenisStandar;
use App\Models\UnitKompetensi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UnitKompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('unit-kompetensi.index', [
            'unitKompetensis' => UnitKompetensi::with('jenis_standar')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unit-kompetensi.create', [
            'jenisStandars' => JenisStandar::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_unit' => 'required|max:255|unique:unit_kompetensis',
            'judul' => 'required|max:255',
            'jenis_standar_id' => 'required',
        ]);

        $jenisStandar = JenisStandar::where('id', $request->jenis_standar_id)->first();

        if ($jenisStandar == null) {
            Alert::errors("Gagal", "Jenis Standar Tidak Valid");
        } else {
            UnitKompetensi::create($validatedData);
            Alert::success("Berhasil", "Berhasil Menambahkan Unit Komptensi");
        }

        return redirect('/unit-kompetensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(UnitKompetensi $unitKompetensi)
    {
        return view('unit-kompetensi.edit', [
            'unitKompetensi' => $unitKompetensi,
            'jenisStandars' => JenisStandar::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnitKompetensi $unitKompetensi)
    {
        if ($request->old_kode_unit == $request->kode_unit) {
            $validatedData = $request->validate([
                'kode_unit' => 'required|max:255',
                'judul' => 'required|max:255',
                'jenis_standar_id' => 'required',
            ]);
        } else {
            $validatedData = $request->validate([
                'kode_unit' => 'required|max:255|unique:unit_kompetensis',
                'judul' => 'required|max:255',
                'jenis_standar_id' => 'required',
            ]);
        }


        $jenisStandar = JenisStandar::where('id', $request->jenis_standar_id)->first();

        if ($jenisStandar == null) {
            Alert::errors("Gagal", "Jenis Standar Tidak Valid");
        } else {
            UnitKompetensi::where('id', $unitKompetensi->id)->update($validatedData);
            Alert::success("Berhasil", "Berhasil Mengubah Unit Komptensi");
        }

        return redirect('/unit-kompetensi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitKompetensi $unitKompetensi)
    {
        UnitKompetensi::where('id', $unitKompetensi->id)->delete();
        Alert::success("Berhasil", "Berhasil Menghapus Unit Kompetensi");

        return redirect('/unit-kompetensi');
    }
}