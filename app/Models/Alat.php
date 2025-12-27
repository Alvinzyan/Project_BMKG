<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\PeriodeHelper;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_alat', 'id_kategori', 'merk_tipe', 'jumlah',
        'tahun_pemasangan', 'kalibrasi_terakhir','keterangan'
    ];

    public function pengecekans(): HasMany
    {
        return $this->hasMany(Pengecekan::class, 'id_alat');
    }

    public function pengecekanTerakhirAktif($start = null, $end = null)
    {
        if (!$start || !$end) {
            $periode = PeriodeHelper::getPeriodeAktif();
            $start = $periode['start_date'];
            $end   = $periode['end_date'];
        }

        return $this->hasOne(Pengecekan::class, 'id_alat')
            ->whereBetween('created_at', [
                "$start 00:00:00",
                "$end 23:59:59"
            ])
            ->latestOfMany();
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function getKalibrasiTerakhirFormatAttribute()
    {
        if (!$this->kalibrasi_terakhir) return null;

        try {
            return \Carbon\Carbon::parse($this->kalibrasi_terakhir)
                ->locale('id')
                ->translatedFormat('F Y');
        } catch (\Exception $e) {
            return null;
        }
    }


    public function getStatusKalibrasiAttribute()
    {
        if (!$this->kalibrasi_terakhir) return null;

        try {
            $jatuhTempo = \Carbon\Carbon::parse($this->kalibrasi_terakhir)
            ->addYear() //kalibrasi berlaku 1 tahun
            ->startOfMonth();
        } catch (\Exception $e) {
            return null;
        }

        $now = now()->startOfMonth();
        $diff = $now->diffInMonths($jatuhTempo, false);

        // 1 bulan sebelum sampai lewat
        if ($diff <= 1) return 'red';

        // 2–3 bulan sebelum jatuh tempo
        if ($diff <= 3) return 'yellow';

        // Lebih dari 3 bulan lagi
        return 'green';
    }
}
