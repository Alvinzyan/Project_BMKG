<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lokasi extends Model
{
    use HasFactory;

    protected $fillable = ['nama_lokasi'];

    public function kategoris(): HasMany
    {
        return $this->hasMany(Kategori::class, 'id_lokasi');
    }
}
