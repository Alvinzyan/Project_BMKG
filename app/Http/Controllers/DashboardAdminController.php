<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;


class DashboardAdminController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalAdmin = User::where('peran', 'admin')->count();
        $totalTeknisi = User::where('peran', 'teknisi')->count();

        $teknisi = User::where('peran', 'teknisi')->get();

        foreach ($teknisi as $user) {
            if ($user->last_seen && Carbon::parse($user->last_seen)->gt(Carbon::now()->subMinutes(5))) {
                $user->status = 'Online';
            } else {
                $user->status = 'Offline';
            }

        }

        return view('dashboard-admin.index', compact(
            'totalUser',
            'totalAdmin',
            'totalTeknisi',
            'teknisi'
        ));
    }
}
