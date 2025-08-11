<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kantorMeteorologiBwi = DB::table('lokasis')->where('nama_lokasi', 'Kantor Meteorologi Banyuwangi')->first()->id;
        $posBandaraBwi = DB::table('lokasis')->where('nama_lokasi', 'Pos Meteorologi Bandara Banyuwangi')->first()->id;
        $posPelabuhanKetapangBwi = DB::table('lokasis')->where('nama_lokasi', 'Pos Meteorologi Pelabuhan Ketapang Banyuwangi')->first()->id;
        $posBandaraJember = DB::table('lokasis')->where('nama_lokasi', 'Pos Meteorologi Bandara Notohadinegoro Jember')->first()->id;

        DB::table('kategoris')->insert([
            // Kantor Meteorologi Banyuwangi
            [
                'nama_kategori' => 'Peralatan Konvensional Kantor Bwi',
                'id_lokasi' => $kantorMeteorologiBwi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'AWS Digital',
                'id_lokasi' => $kantorMeteorologiBwi,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Pos Meteorologi Bandara Banyuwangi
            [
                'nama_kategori' => 'Peralatan Konvensional Bandara Bwi',
                'id_lokasi' => $posBandaraBwi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'AWOS Kategori 3 All Weather',
                'id_lokasi' => $posBandaraBwi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Peralatan Pendukung Bandara Bwi',
                'id_lokasi' => $posBandaraBwi,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Pos Meteorologi Pelabuhan Ketapang Banyuwangi
            [
                'nama_kategori' => 'AWS Maritim',
                'id_lokasi' => $posPelabuhanKetapangBwi,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Peralatan Pendukung Pelabuhan Ktpg Bwi',
                'id_lokasi' => $posPelabuhanKetapangBwi,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Pos Meteorologi Bandara Notohadinegoro Jember
            [
                'nama_kategori' => 'AWOS Kategori 1 All Weather',
                'id_lokasi' => $posBandaraJember,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'RAMI',
                'id_lokasi' => $posBandaraJember,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Peralatan Pendukung Bandara Jember',
                'id_lokasi' => $posBandaraJember,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
