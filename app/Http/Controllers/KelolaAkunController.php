<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class KelolaAkunController extends Controller
{
    // public function index()
    // {
    //     $users = User::all();
    //     $totalUser = $users->count();

    //     return view('kelola-akun.index', compact('users', 'totalUser'));
    // }

    public function index()
    {
        $users = \App\Models\User::all()->map(function ($user) {
            try {
                $user->decrypted_password = \Illuminate\Support\Facades\Crypt::decryptString($user->password);
            } catch (\Exception $e) {
                $user->decrypted_password = '********';
            }
            return $user;
        });

        // Statistik
        $totalUser = $users->count();
        $totalAdmin = $users->where('peran', 'Admin')->count();
        $totalTeknisi = $users->where('peran', 'Teknisi')->count();

        return view('kelola-akun.index', compact('users', 'totalUser', 'totalAdmin', 'totalTeknisi'));
    }

    public function create()
    {
        return view('kelola-akun.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap'   => 'required|string|max:255',
            'nip'            => 'nullable|string|max:50|unique:users,nip',
            'jabatan'        => 'nullable|string|max:100',
            'jenis_kelamin'  => 'nullable|in:laki laki,perempuan',
            'email'          => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|co\.id|id|ac\.id|net|org)$/'
            ],
            'password'       => 'required|string|min:6',
            'peran'          => 'nullable|string',
            'foto_profil'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'email.regex' => 'Format email tidak valid. Gunakan email yang berakhiran .com, .co.id, .ac.id, .id, .net, atau .org',
        ]);

        $fotoProfilPath = null;
        if ($request->hasFile('foto_profil')) {
            $fotoProfilPath = $request->file('foto_profil')->store('foto_profil', 'public');
        }

        User::create([
            'nama_lengkap'  => $validated['nama_lengkap'],
            'nip'           => $validated['nip'] ?? null,
            'jabatan'       => $validated['jabatan'] ?? null,
            'jenis_kelamin' => $validated['jenis_kelamin'] ?? null,
            'email'         => $validated['email'],
            'password'      => Crypt::encryptString($validated['password']),
            'peran'         => $validated['peran'] ?? 'teknisi',
            'foto_profil'   => $fotoProfilPath,
        ]);

        return redirect()->route('kelola-akun.index')
            ->with('success', 'Akun berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('kelola-akun.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        session(['edit_user_id' => $id]);

        $request->validate([
            'nama_lengkap'   => 'required|string|max:255',
            'nip'            => 'nullable|string|max:50|unique:users,nip,' . $id,
            'jabatan'        => 'nullable|string|max:100',
            'jenis_kelamin'  => 'nullable|in:laki laki,perempuan',
            'email'          => [
                'required',
                'email',
                'max:255',
                'unique:users,email,' . $id,
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|co\.id|id|ac\.id|net|org)$/'
            ],
            'password'       => 'nullable|string|min:6',
            'peran'          => 'nullable|string',
            'foto_profil'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'email.regex' => 'Format email tidak valid. Gunakan email yang berakhiran .com, .co.id, .ac.id, .id, .net, atau .org',
        ]);

        session()->forget('edit_user_id');

        $user->nama_lengkap  = $request->nama_lengkap;
        $user->nip           = $request->nip ?? null;
        $user->jabatan       = $request->jabatan ?? null;
        $user->jenis_kelamin = $request->jenis_kelamin ?? null;
        $user->email         = $request->email;
        $user->peran         = $request->peran ?? 'teknisi';

        if ($request->filled('password')) {
            $user->password = Crypt::encryptString($request->password);
        }

        if ($request->hasFile('foto_profil')) {
            $fotoProfilPath = $request->file('foto_profil')->store('foto_profil', 'public');
            $user->foto_profil = $fotoProfilPath;
        }

        $user->save();

        return redirect()->route('kelola-akun.index')
            ->with('success', 'Akun berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('kelola-akun.index')
            ->with('success', 'Akun berhasil dihapus.');
    }
}
