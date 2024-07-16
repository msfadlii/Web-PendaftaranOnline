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
        Schema::create('provinsi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
        });

        Schema::create('kota', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provinsi_id')->constrained('provinsi')->onDelete('cascade');
            $table->string('nama');
        });

        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kota_id')->constrained('kota')->onDelete('cascade');
            $table->string('nama');
        });

        Schema::create('kelurahan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatan_id')->constrained('kecamatan')->onDelete('cascade');
            $table->string('nama');
        });

        Schema::create('kodepos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelurahan_id')->constrained('kelurahan')->onDelete('cascade');
            $table->string('kode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
