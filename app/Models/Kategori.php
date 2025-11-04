<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kategori', 'id_lokasi'];

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'id_lokasi');
    }

    public function alats(): HasMany
    {
        return $this->hasMany(Alat::class, 'id_kategori');
    }

    public function catatanKategoris()
    {
        return $this->hasMany(CatatanKategori::class, 'id_kategori');
    }

    public function catatanTerakhir()
    {
        return $this->hasOne(CatatanKategori::class, 'id_kategori')->latest();
    }
}
