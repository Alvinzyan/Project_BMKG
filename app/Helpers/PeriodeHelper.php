<?php

namespace App\Helpers;

use Carbon\Carbon;

class PeriodeHelper
{
    /**
     * Ambil periode minggu aktif saat ini (Sabtu s/d Jumat)
     *
     * @return array|null
     */
    public static function getPeriodeAktif()
    {
        $today = now(); // Hari ini
        $tahun = $today->year;
        $bulan = $today->month;

        // Mulai dari hari pertama tahun ini
        $tanggal = Carbon::create($tahun, 1, 1);

        // Geser ke Sabtu pertama
        if ($tanggal->dayOfWeek !== Carbon::SATURDAY) {
            $tanggal = $tanggal->next(Carbon::SATURDAY);
        }

        $minggu = 1;

        while ($tanggal->year == $tahun) {
            $awal = $tanggal->copy();
            $akhir = $tanggal->copy()->addDays(6);

            // Jika hari ini ada di antara awal & akhir minggu
            if ($today->between($awal, $akhir)) {
                return [
                    'periode_year' => $awal->year,
                    'periode_month' => $awal->month, // Bisa tetap ambil bulan awal minggu
                    'periode_week' => $minggu,
                    'start_date' => $awal->format('Y-m-d'),
                    'end_date' => $akhir->format('Y-m-d'),
                ];
            }

            $tanggal->addWeek();
            $minggu++;
        }

        return null; // Tidak ada periode aktif
    }
}
