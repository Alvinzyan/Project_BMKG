<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporan_mingguans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_lokasi')->constrained('lokasis');
            $table->date('periode_awal');
            $table->date('periode_akhir');
            $table->foreignId('id_user')->constrained('users');     
            $table->date('tanggal_laporan');                       
            $table->string('nomor_surat')->nullable();              
            $table->string('tempat_dibuat')->nullable();           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_mingguans');
    }
};
