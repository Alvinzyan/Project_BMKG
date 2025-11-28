<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = auth()->user(); 
        return view('profile.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pos-bandara-bwi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'nama_lengkap' => 'required|string|min:3|max:255',
            'jenis_kelamin' => 'nullable|in:laki laki,perempuan',
            'foto_profil' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto_profil')) {

            if ($user->foto_profil && file_exists(storage_path('app/public/' . $user->foto_profil))) {
                unlink(storage_path('app/public/' . $user->foto_profil));
            }

            $fotoProfilPath = $request->file('foto_profil')->store('foto_profil', 'public');

            $user->foto_profil = $fotoProfilPath;
        }


        $user->nama_lengkap = $request->nama_lengkap;
        $user->jenis_kelamin = $request->jenis_kelamin;

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diupdate!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
