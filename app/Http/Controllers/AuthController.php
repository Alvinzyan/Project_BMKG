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

        if (!$user) {
            // Jika email tidak ditemukan
            return back()->with('error', 'Email atau Kata Sandi yang anda masukkan salah.')->onlyInput('email');
        }

        try {
            $decryptedPassword = Crypt::decryptString($user->password);

            if ($decryptedPassword === $request->password) {
                Auth::login($user, $request->has('remember'));
                $request->session()->regenerate();
                return redirect('/inventaris-alat')->with('success', 'Login berhasil.');
            } else {
                return back()->with('error', 'Email atau Kata Sandi yang anda masukkan salah.')->onlyInput('email');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan pada sistem autentikasi.')->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
