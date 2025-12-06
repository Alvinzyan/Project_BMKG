<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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

        $validated = $request->validate([
            'nama_lengkap'  => 'required|string|min:3|max:255',
            'jenis_kelamin' => 'nullable|in:laki laki,perempuan',
            'foto_profil'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'foto_base64'   => 'nullable|string',
            'jabatan'       => 'nullable|string|max:100',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'nama_lengkap.min' => 'Nama lengkap minimal 3 karakter',
            'foto_profil.mimes' => 'Unggah dengan format jpg, jpeg, png',
            'foto_profil.image' => 'File harus berupa gambar',
            'foto_profil.max'   => 'Ukuran file maksimum 2MB',
        ]);

        if ($request->hapus_foto == 1) {
            if ($user->foto_profil && Storage::disk('public')->exists($user->foto_profil)) {
                Storage::disk('public')->delete($user->foto_profil);
            }

            $validated['foto_profil'] = null;
        }

        elseif ($request->foto_base64) {

            if ($user->foto_profil && Storage::disk('public')->exists($user->foto_profil)) {
                Storage::disk('public')->delete($user->foto_profil);
            }

            $image_parts = explode(";base64,", $request->foto_base64);
            $image_base64 = base64_decode($image_parts[1]);

            $fileName = 'foto_profil_' . time() . '.png';

            Storage::disk('public')->put('foto_profil/' . $fileName, $image_base64);

            $validated['foto_profil'] = 'foto_profil/' . $fileName;
        }

        elseif ($request->hasFile('foto_profil')) {

            if ($user->foto_profil && Storage::disk('public')->exists($user->foto_profil)) {
                Storage::disk('public')->delete($user->foto_profil);
            }

            $validated['foto_profil'] = $request->file('foto_profil')->store('foto_profil', 'public');
        }

        $user->update($validated);

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
