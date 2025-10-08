<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class KelolaAkunController extends Controller
{
    public function index()
    {
        $users = User::all();
        $totalUser = $users->count();

        return view('kelola-akun.index', compact('users', 'totalUser'));
    }

    public function create()
    {
        return view('kelola-akun.create');
    }

    public function store(Request $request)
    {
        // logika simpan data
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'nama_lengkap' => $validated['nama_lengkap'],
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
        ]);

        return redirect()->route('kelola-akun.index')
            ->with('success', 'Akun berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('kelola-akun.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'password' => 'nullable|string|min:6',
        ]);

        $user = User::findOrFail($id);

        $user->nama_lengkap = $request->nama_lengkap;
        $user->username = $request->username;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('kelola-akun.index')
            ->with('success', 'Akun berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // logika hapus
        {
            $user = User::findOrFail($id);
            $user->delete();
        
            return redirect()->route('kelola-akun.index')
                ->with('success', 'Akun berhasil dihapus.');
        }
    }
}
