<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengecekan extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'penanggung_jawab', 'id_alat', 'kondisi', 'kalibrasi_terakhir',  'foto_lampiran'];

    protected $casts = [
        'kondisi' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function alat()
    {
        return $this->belongsTo(Alat::class, 'id_alat');
    }

    public function penanggungJawab()
    {
        return $this->belongsTo(User::class, 'penanggung_jawab');
    }
}
