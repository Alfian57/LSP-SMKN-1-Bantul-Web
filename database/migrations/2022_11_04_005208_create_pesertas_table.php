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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_ktp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('kebangsaan');
            $table->text('alamat');
            $table->string('kode_pos');
            $table->string('no_telepon');
            $table->string('kualifikasi_pendidikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
};