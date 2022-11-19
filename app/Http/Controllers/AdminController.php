<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.index', [
            'admins' => User::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.create');
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
            'email' => 'required|max:255|unique:users'
        ]);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make('password'),
        ];

        User::create($data);

        Alert::success("Berhasil", "Berhasil Menambahkan Administrator");

        return redirect('/administrator');
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
        return view('administrator.edit', [
            'admin' => User::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
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

        User::where('id', $user->id)->update($data);

        Alert::success("Berhasil", "Berhasil Mengubah Administrator");

        return redirect('/administrator');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        Alert::success("Berhasil", "Berhasil Menghapus Administrator");

        return redirect('/administrator');
    }
}