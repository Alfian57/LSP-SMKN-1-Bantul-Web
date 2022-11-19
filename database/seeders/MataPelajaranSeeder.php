<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MataPelajaran::factory()->create([
            'nama' => 'Pemrograman Berorientasi Objek',
            'slug' => 'pemrograman-berorientasi-objek',
        ]);
    }
}