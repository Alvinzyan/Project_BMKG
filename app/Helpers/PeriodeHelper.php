<?php

namespace App\Helpers;

use Carbon\Carbon;

class PeriodeHelper
{
    public static function getPeriodeAktif()
    {
        $tanggal = Carbon::now('Asia/Jakarta');

        $start = $tanggal->copy()->startOfWeek(Carbon::SATURDAY);
        $end   = $tanggal->copy()->endOfWeek(Carbon::FRIDAY);

        return [
            'start_date' => $start->toDateString(),
            'end_date'   => $end->toDateString(),

            'start_label' => $start->translatedFormat('d M Y'),
            'end_label'   => $end->translatedFormat('d M Y'),

            // Sementara minggu tetap null agar Blade lama aman
            'periode_year'  => null,
            'periode_month' => null,
            'periode_week'  => $start->weekOfYear,
        ];
    }

    public static function getPeriodeFromDate($date)
    {
        $tanggal = Carbon::parse($date);

        return [
            'start_date' => $tanggal->copy()->startOfWeek(Carbon::SATURDAY)->toDateString(),
            'end_date'   => $tanggal->copy()->endOfWeek(Carbon::FRIDAY)->toDateString(),
        ];
    }

    // Opsional
public static function filterPengecekanByPeriode($query, $periode = null)
{
    $periode = $periode ?? self::getPeriodeAktif();

    return $query->whereBetween('created_at', [
        $periode['start_date'] . ' 00:00:00',
        $periode['end_date'] . ' 23:59:59'
    ]);
}
}
