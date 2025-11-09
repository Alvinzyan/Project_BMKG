<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_action(Request $request)
    {
        // Validasi input NIP dan password
        $request->validate([
            'nip' => 'required|string|max:50',
            'password' => 'required|min:6|max:30',
        ]);

        // Cari user berdasarkan NIP
        $user = User::where('nip', $request->nip)->first();

        if ($user) {
            try {
                // Dekripsi password terenkripsi
                $decryptedPassword = Crypt::decryptString($user->password);

                // Cek kecocokan password
                if ($decryptedPassword === $request->password) {
                    Auth::login($user, $request->has('remember'));
                    $request->session()->regenerate();

                    // Arahkan sesuai peran
                    if ($user->peran == 'admin') {
                        return redirect()->route('dashboard-admin.index')->with('success', 'Login berhasil sebagai admin.');
                    }

                    if ($user->peran == 'teknisi') {
                        return redirect('/inventaris-alat')->with('success', 'Login berhasil sebagai teknisi.');
                    }

                    // Default jika tidak ada peran spesifik
                    return redirect()->route('dashboard')->with('success', 'Login berhasil.');
                } else {
                    return back()->withErrors(['nip', 'password' => 'NIP atau password salah.'])->onlyInput('nip', 'paswword');
                }

            } catch (\Exception $e) {
                return back()->withErrors(['nip' => 'NIP tidak valid atau terenkripsi dengan format berbeda.'])->onlyInput('nip');
            }
        }

        return back()->withErrors(['nip' => 'NIP tidak ditemukan.'])->onlyInput('nip');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
