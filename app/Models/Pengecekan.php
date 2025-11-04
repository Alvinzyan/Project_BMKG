<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengecekan extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'id_alat', 'kondisi', 'kalibrasi_terakhir'];

     public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function alat() {
        return $this->belongsTo(Alat::class, 'id_alat');
    }
}
