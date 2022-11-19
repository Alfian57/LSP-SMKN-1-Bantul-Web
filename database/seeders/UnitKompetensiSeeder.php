<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKompetensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'LOG.0001.002.01',
            'judul' => 'Menerapkan Prinsip-prinsip Keselamatan dan Kesehatan Kerja di Lingkungan Kerja',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'LOG.0002.001.01',
            'judul' => 'Menerapkan Sistem Mutu',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'TIK.OP01.002.01',
            'judul' => 'Mengidentifikasi Aspek Kode Etik dan HAKI Dibidang TIK',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'J.620100.005.02',
            'judul' => 'Mengimplementasikan User Interface',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'J.620100.010.01',
            'judul' => 'Menerapkan Perintah Eksekusi Bahasa Pemrograman Berbasis Teks, Grafik, dan Multimedia',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'J.620100.012.01',
            'judul' => 'Melakukan Pengaturan Software Tools Pemrograman',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'J.620100.018.01',
            'judul' => 'Mengimplementasikan Pemrograman Berorientasi Objek',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'J.620100.020.02',
            'judul' => 'Menggunakan SQL',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'J.620100.023.02',
            'judul' => 'Membuat Dokumen Code Program',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'J.620100.030.02',
            'judul' => 'Menerapkan Pemrograman Multimedia',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'J.620100.033.02',
            'judul' => 'Melaksanakan Pengujian Unit Program',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'J.620100.041.01',
            'judul' => 'Melaksanakan Kofigurasi Perangkat Lunak Sesuai Environtment (Development, Staging, Production)',
            'jenis_standar_id' => 3
        ]);
        \App\Models\UnitKompetensi::factory()->create([
            'kode_unit' => 'J.620100.046.01',
            'judul' => 'Melakukan Logging Aplikasi',
            'jenis_standar_id' => 3
        ]);
    }
}