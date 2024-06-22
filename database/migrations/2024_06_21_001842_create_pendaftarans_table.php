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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->string('users_nik');
            $table->unsignedBigInteger('pilihan1_sekolah');
            $table->unsignedBigInteger('pilihan2_sekolah');
            $table->unsignedBigInteger('diterima');
            $table->timestamps();

            $table->foreign('users_nik')->references('nik')->on('users')->onDelete('cascade');
            $table->foreign('pilihan1_sekolah')->references('npsn')->on('sekolah');
            $table->foreign('pilihan2_sekolah')->references('npsn')->on('sekolah');
            $table->foreign('diterima')->references('npsn')->on('sekolah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
