<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.index', [
            'siswas' => Siswa::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
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
            'nama' => 'required|max:255',
            'email' => 'required|max:255|unique:siswas'
        ]);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make('password'),
        ];

        Siswa::create($data);

        Alert::success("Berhasil", "Berhasil Menambahkan Siswa");

        return redirect('/siswa');
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
        return view('siswa.edit', [
            'siswa' => Siswa::where('id', $id)->first()
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
        if ($request->old_email == $request->email) {
            $request->validate([
                'nama' => 'required|max:255',
                'email' => 'required|max:255',
            ]);
        } else {
            $request->validate([
                'nama' => 'required|max:255',
                'email' => 'required|max:255|unique:users',
            ]);
        }


        $data = [
            'nama' => $request->nama,
            'email' => $request->email
        ];

        Siswa::where('id', $id)->update($data);

        Alert::success("Berhasil", "Berhasil Mengubah Siswa");

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::where('id', $id)->delete();
        Alert::success("Berhasil", "Berhasil Menghapus Siswa");

        return redirect('/siswa');
    }
}