<?php

namespace App\Helpers;

use Carbon\Carbon;

class PeriodeHelper
{
    public static function getPeriodeAktif()
    {
        $tanggal = now();
        $hari = $tanggal->dayOfWeek;

        $offset = ($hari + 1) % 7;
        $start = $tanggal->copy()->subDays($offset);

        $end = $start->copy()->addDays(6);

        return [
            'start_date' => $start->format('Y-m-d'),
            'end_date'   => $end->format('Y-m-d'),
            'start_label' => $start->translatedFormat('d F Y'),
            'end_label'   => $end->translatedFormat('d F Y'),
            'periode_week' => $start->weekOfYear,
        ];
    }

    public static function getPeriodeFromDate($date)
    {
        $tanggal = Carbon::parse($date);
        $hari = $tanggal->dayOfWeek;
        $offset = ($hari + 1) % 7;
        $start = $tanggal->copy()->subDays($offset);
        $end   = $start->copy()->addDays(6);

        return [
            'start_date' => $start->toDateString(),
            'end_date'   => $end->toDateString(),
        ];
    }

    public static function filterPengecekanByPeriode($query, $periode = null)
    {
        $periode = $periode ?? self::getPeriodeAktif();

        return $query->whereBetween('created_at', [
            "{$periode['start_date']} 00:00:00",
            "{$periode['end_date']} 23:59:59"
        ]);
    }
}
