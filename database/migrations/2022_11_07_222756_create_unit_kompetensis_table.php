<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_kompetensis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_unit')->unique();
            $table->string('judul');
            $table->unsignedBigInteger('jenis_standar_id');
            $table->timestamps();

            $table->foreign('jenis_standar_id')->references('id')->on('jenis_standars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_kompetensis');
    }
};