<?php

namespace App\Helpers;

use Carbon\Carbon;

class PeriodeHelper
{
    public static function getPeriodeAktif()
    {
        // Pastikan timezone aman
        $today = Carbon::now('Asia/Jakarta')->startOfDay();

        // Mulai dari tanggal awal (2020)
        $start = Carbon::create(2020, 1, 1, 0, 0, 0, 'Asia/Jakarta');

        // Geser ke Sabtu pertama (manual)
        while ($start->dayOfWeek !== Carbon::SATURDAY) {
            $start->addDay();
        }

        // Loop periode hingga minggu ke 5000
        $tanggal = $start->copy();
        $minggu  = 1;

        while ($minggu < 5000) {
            $awal  = $tanggal->copy();
            $akhir = $tanggal->copy()->addDays(6);

            if ($today->between($awal, $akhir)) {
                return [
                    'periode_year'  => $awal->year,
                    'periode_month' => $awal->month,
                    'periode_week'  => $minggu,
                    'start_date'    => $awal->format('Y-m-d'),
                    'end_date'      => $akhir->format('Y-m-d'),
                ];
            }

            $tanggal->addWeek();
            $minggu++;
        }

        return null;
    }
}
