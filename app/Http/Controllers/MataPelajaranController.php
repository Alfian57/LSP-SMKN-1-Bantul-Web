<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mata-pelajaran.index', [
            'mataPelajarans' => MataPelajaran::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mata-pelajaran.create');
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
            'nama' => 'required|max:255|unique:mata_pelajarans'
        ]);

        $data = [
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama)
        ];

        MataPelajaran::create($data);

        Alert::success("Berhasil", "Berhasil Menambahkan Mata Pelajaran");

        return redirect('/mata-pelajaran');
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
    public function edit(MataPelajaran $mataPelajaran)
    {
        return view('mata-pelajaran.edit', [
            "mataPelajaran" => $mataPelajaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MataPelajaran $mataPelajaran)
    {
        if ($request->nama_lama == $request->nama) {
            $request->validate([
                'nama' => 'required|max:255'
            ]);
        } else {
            $request->validate([
                'nama' => 'required|max:255|unique:mata_pelajarans'
            ]);
            $data = [
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama)
            ];
            MataPelajaran::where('id', $mataPelajaran->id)->update($data);
        }

        Alert::success("Berhasil", "Berhasil Mengubah Mata Pelajaran");

        return redirect('/mata-pelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataPelajaran $mataPelajaran)
    {
        MataPelajaran::where('id', $mataPelajaran->id)->delete();
        Alert::success("Berhasil", "Berhasil Menghapus Mata Pelajaran");

        return redirect('/mata-pelajaran');
    }
}