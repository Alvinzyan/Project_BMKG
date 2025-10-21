<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanKategori extends Model
{
    use HasFactory;

    protected $fillable = ['id_kategori', 'isi_catatan'];
}
