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

    public function lokasi():BelongsTo
    {
        return $this->belongsTo(Lokasi::class, 'id_kategori');
    }

    public function alat():HasMany
    {
        return $this->hasMany(Alat::class);
    }
}
