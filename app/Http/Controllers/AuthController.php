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
        $request->validate([
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.(com|co\.id|id|ac\.id|net|org)$/'
            ],
            'password' => 'required|min:6|max:30',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            try {
                // Dekripsi password dari database
                $decryptedPassword = Crypt::decryptString($user->password);

                // Cek apakah cocok
                if ($decryptedPassword === $request->password) {
                    Auth::login($user, $request->has('remember'));
                    $request->session()->regenerate();

                    // Arahkan langsung ke halaman inventaris alat
                    return redirect('/inventaris-alat')->with('success', 'Login berhasil.');
                } else {
                    return back()->withErrors(['email' => 'Password salah.'])->onlyInput('email');
                }

            } catch (\Exception $e) {
                return back()->withErrors(['email' => 'Password tidak valid atau terenkripsi dengan format berbeda.'])->onlyInput('email');
            }
        }

        return back()->withErrors(['email' => 'Email tidak ditemukan.'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
