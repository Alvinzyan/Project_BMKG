<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pengecekan extends Model
{
    use HasFactory;

    protected $fillable = ['id_alat', 'kondisi', 'keterangan', 'kalibrasi_terakhir', 'tanggal_dibuat'];

    public function cekAlat():HasOne
    {
        return $this->hasOne(Alat::class);
    }
}
