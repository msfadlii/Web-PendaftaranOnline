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
        Schema::create('users', function (Blueprint $table) {
            $table->string('nik')->primary();
            $table->string('password');
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('jenis_kelamin', function (Blueprint $table) {
            $table->id();
            $table->string('jk');
        });

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

        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->string('nama_status');
        });

        Schema::create('detail_users', function (Blueprint $table) {
            $table->string('users_nik');
            $table->string('nama');
            $table->unsignedBigInteger('jk_id');
            $table->string('tempatLahir');
            $table->date('tglLahir');
            $table->string('alamat');
            $table->integer('rt');
            $table->integer('rw');
            $table->unsignedBigInteger('provinsi_id');
            $table->unsignedBigInteger('kota_id');
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('kelurahan_id');
            $table->unsignedBigInteger('kodepos_id');
            $table->string('ortu');
            $table->string('no_hp');
            $table->unsignedBigInteger('status_id')->default(3);

            $table->foreign('users_nik')->references('nik')->on('users')->onDelete('cascade'); //onDelete('cascade') untuk jika data di tabel users dihapus maka foreign key ikut terhapus
            $table->foreign('jk_id')->references('id')->on('jenis_kelamin');
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
            $table->foreign('kota_id')->references('id')->on('kota');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahan');
            $table->foreign('kodepos_id')->references('id')->on('kodepos');
            $table->foreign('status_id')->references('id')->on('status');

            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
        // Schema::dropIfExists('password_reset_tokens');
        // Schema::dropIfExists('sessions');
    }
};
