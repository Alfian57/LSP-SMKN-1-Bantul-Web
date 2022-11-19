<?php

namespace App\Http\Controllers;

use App\Models\JenisStandar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class JenisStandarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jenis-standar.index', [
            'jenisStandars' => JenisStandar::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis-standar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255|unique:jenis_standars'
        ]);

        $data = [
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama)
        ];

        JenisStandar::create($data);

        Alert::success("Berhasil", "Berhasil Menambahkan Jenis Standar");

        return redirect('/jenis-standar');
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
    public function edit(JenisStandar $jenisStandar)
    {
        return view('jenis-standar.edit', [
            'jenisStandar' => JenisStandar::where('id', $jenisStandar->id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisStandar $jenisStandar)
    {
        if ($request->nama_lama == $request->nama) {
            $request->validate([
                'nama' => 'required|max:255'
            ]);
        } else {
            $request->validate([
                'nama' => 'required|max:255|unique:jenis_standars'
            ]);
            $data = [
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama)
            ];
            JenisStandar::where('id', $jenisStandar->id)->update($data);
        }

        Alert::success("Berhasil", "Berhasil Mengubah Jenis Standar");

        return redirect('/jenis-standar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisStandar $jenisStandar)
    {
        JenisStandar::where('id', $jenisStandar->id)->delete();
        Alert::success("Berhasil", "Berhasil Menghapus Jenis Standar");

        return redirect('/jenis-standar');
    }
}