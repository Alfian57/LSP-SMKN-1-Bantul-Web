<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisStandarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\JenisStandar::factory()->create([
            'nama' => 'Standar Khusus',
            'slug' => 'standar-khusus',
        ]);
        \App\Models\JenisStandar::factory()->create([
            'nama' => 'Standar Internasional',
            'slug' => 'standar-internasional',
        ]);
        \App\Models\JenisStandar::factory()->create([
            'nama' => 'SKKNI',
            'slug' => 'skkni',
        ]);
    }
}