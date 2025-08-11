<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alat extends Model
{
    use HasFactory;

    protected $fillable = ['nama_alat', 'id_kategori', 'merk_tipe', 'jumlah', 'tahun_pemasangan'];


    public function alat():BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function cekAlat():BelongsTo
    {
        return $this->belongsTo(Pengecekan::class, 'id_alat');
    }
}
