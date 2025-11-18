<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\PeriodeHelper;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alat extends Model
{
    use HasFactory;

    protected $fillable = ['nama_alat', 'id_kategori', 'merk_tipe', 'jumlah', 'tahun_pemasangan', 'keterangan'];

    public function pengecekans()
    {
        return $this->hasMany(Pengecekan::class, 'id_alat');
    }

    public function pengecekanTerakhirAktif()
    {
        $periode = PeriodeHelper::getPeriodeAktif();

        return $this->hasOne(Pengecekan::class, 'id_alat')
            ->whereBetween('created_at', [
                $periode['start_date'] . ' 00:00:00',
                $periode['end_date'] . ' 23:59:59'
            ])
            ->latestOfMany();
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
