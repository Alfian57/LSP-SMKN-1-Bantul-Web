<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peserta.index', [
            'pesertas' => Peserta::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.create');
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

        return redirect('/peserta');
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
    public function edit($id)
    {
        return view('peserta.edit', [
            'peserta' => Peserta::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->old_no_ktp == $request->no_ktp) {
            $validatedData = $request->validate([
                'nama' => 'required|max:255',
                'no_ktp' => 'required|digits:16|max:255',
                'tempat_lahir' => 'required|max:255',
                'tanggal_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'kebangsaan' => 'required|max:255',
                'alamat' => 'required',
                'kode_pos' => 'required|digits:5',
                'no_telepon' => 'required',
                'kualifikasi_pendidikan' => 'required|max:255',
            ]);
        } else {
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
        }


        Alert::success('Berhasil', 'Peserta Berhasil Diupdate');
        Peserta::where('id', $id)->update($validatedData);

        return redirect('/peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peserta::where('id', $id)->delete();
        Alert::success("Berhasil", "Berhasil Menghapus Peserta");

        return redirect('/peserta');
    }
}