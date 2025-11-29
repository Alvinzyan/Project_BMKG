<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('pos-bandara-bwi.create');
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
        /** @var \App\Models\User $user */
        $user = auth()->user();

        $request->validate([
            'nama_lengkap'  => 'required|string|min:3|max:255',
            'jenis_kelamin' => 'nullable|in:laki laki,perempuan',
            'foto_profil'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'jabatan'       => 'nullable|string|max:100',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'nama_lengkap.min' => 'Nama lengkap minimal 3 karakter',
            'foto_profil.mimes' => 'Unggah dengan format jpg, jpeg, png',
            'foto_profil.image' => 'File harus berupa gambar',
            'foto_profil.max'   => 'Ukuran file maksimum 2MB',
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
        $user->jabatan = $request->jabatan;

        $user->save();

        return redirect()->route('profile.index')
            ->with('success', 'Profil berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
