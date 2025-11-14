<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    // Halaman Login
    public function login()
    {
        return view('auth.login');
    }

    // Aksi Login
    public function login_action(Request $request)
    {
        // Validasi input
        $request->validate([
            'nip' => 'required|string|max:50',
            'password' => 'required|string|min:6|max:30',
        ]);

        // Cari user berdasarkan NIP
        $user = User::where('nip', $request->nip)->first();

        if (!$user) {
            return back()->withErrors([
                'nip' => 'NIP tidak ditemukan.'
            ])->onlyInput('nip');
        }

        try {
            // Dekripsi password terenkripsi
            $decryptedPassword = Crypt::decryptString($user->password);
        } catch (\Exception $e) {
            return back()->withErrors([
                'nip' => 'NIP tidak valid atau password terenkripsi dengan format berbeda.'
            ])->onlyInput('nip');
        }

        // Cek password
        if ($decryptedPassword !== $request->password) {
            return back()->withErrors([
                'password' => 'Password yang Anda masukkan salah.'
            ])->onlyInput('nip');
        }

        // Login
        Auth::login($user, $request->has('remember'));
        $request->session()->regenerate();

        // Arahkan sesuai peran pengguna
        if ($user->peran === 'admin') {
            return redirect()
                ->route('dashboard-admin.index')
                ->with('success', 'Login berhasil sebagai admin.');
        }

        if ($user->peran === 'teknisi') {
            return redirect('/inventaris-alat')
                ->with('success', 'Login berhasil sebagai teknisi.');
        }

        // Default
        return redirect()
            ->route('dashboard')
            ->with('success', 'Login berhasil.');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
