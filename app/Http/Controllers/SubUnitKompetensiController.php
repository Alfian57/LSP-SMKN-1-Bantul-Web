<?php

namespace App\Http\Controllers;

use App\Models\SubUnitKompetensi;
use App\Models\UnitKompetensi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SubUnitKompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kodeUnit)
    {
        $unitKompetensi = UnitKompetensi::where('kode_unit', $kodeUnit)->first();

        if ($unitKompetensi == null) {
            return back();
        }

        return view('sub-unit-kompetensi.index', [
            'unitKompetensi' => $unitKompetensi,
            'subs' => SubUnitKompetensi::where('unit_kompetensi_id', $unitKompetensi->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($kodeUnit)
    {
        $unitKompetensi = UnitKompetensi::where('kode_unit', $kodeUnit)->first();

        if ($unitKompetensi == null) {
            return back();
        }

        return view('sub-unit-kompetensi.create', [
            'unitKompetensi' => $unitKompetensi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $kodeUnit)
    {
        $request->validate([
            'judul' => 'required|max:255'
        ]);

        $unitKompetensi = UnitKompetensi::where('kode_unit', $kodeUnit)->first();

        if ($unitKompetensi == null) {
            return back();
        }

        SubUnitKompetensi::create([
            'judul' => $request->judul,
            'unit_kompetensi_id' => $unitKompetensi->id,
        ]);

        Alert::success("Berhasil", "Berhasil Menambahkan Sub Unit Kompetensi");

        return redirect('/unit-kompetensi/' . $unitKompetensi->kode_unit . '/sub');
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
    public function edit($kodeUnit, $id)
    {
        $unitKompetensi = UnitKompetensi::where('kode_unit', $kodeUnit)->first();
        $subUnitKompetensi = SubUnitKompetensi::where('id', $id)->first();

        if ($unitKompetensi == null) {
            return back();
        }
        if ($subUnitKompetensi == null) {
            return back();
        }

        return view('sub-unit-kompetensi.edit', [
            'unitKompetensi' => $unitKompetensi,
            'subUnitKompetensi' => $subUnitKompetensi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kodeUnit, $id)
    {
        $request->validate([
            'judul' => 'required|max:255'
        ]);

        $unitKompetensi = UnitKompetensi::where('kode_unit', $kodeUnit)->first();

        if ($unitKompetensi == null) {
            return back();
        }

        SubUnitKompetensi::where('id', $id)->update([
            'judul' => $request->judul,
        ]);

        Alert::success("Berhasil", "Berhasil Menambahkan Sub Unit Kompetensi");

        return redirect('/unit-kompetensi/' . $unitKompetensi->kode_unit . '/sub');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kodeUnit, $id)
    {
        $unitKompetensi = UnitKompetensi::where('kode_unit', $kodeUnit)->first();

        if ($unitKompetensi == null) {
            return back();
        }

        SubUnitKompetensi::where('id', $id)->delete();
        Alert::success("Berhasil", "Berhasil Menghapus Sub Unit Kompetensi");

        return redirect('/unit-kompetensi/' . $unitKompetensi->kode_unit . '/sub');
    }
}