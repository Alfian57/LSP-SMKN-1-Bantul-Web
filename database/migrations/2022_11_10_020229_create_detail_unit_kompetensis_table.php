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
        Schema::create('sub_unit_kompetensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_kompetensi_id');
            $table->string('judul');
            $table->timestamps();

            $table->foreign('unit_kompetensi_id')->references('id')->on('unit_kompetensis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_unit_kompetensis');
    }
};