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
            $table->enum('role', ['admin', 'user']);
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

        Schema::create('detail_users', function (Blueprint $table) {
            $table->string('users_nik');
            $table->string('nama');
            $table->unsignedBigInteger('jk_id');
            $table->string('ttl');
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

            $table->foreign('users_nik')->references('nik')->on('users')->onDelete('cascade'); //onDelete('cascade') untuk jika data di tabel users dihapus maka foreign key ikut terhapus
            $table->foreign('jk_id')->references('id')->on('jenis_kelamin');
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
            $table->foreign('kota_id')->references('id')->on('kota');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahan');
            $table->foreign('kodepos_id')->references('id')->on('kodepos');

            $table->timestamps();
        });

        Schema::create('sekolah', function (Blueprint $table) {
            $table->unsignedBigInteger('npsn')->primary();
            $table->string('nama_sekolah');
            $table->string('alamat_sekolah');
            $table->unsignedBigInteger('provinsi_id');
            $table->unsignedBigInteger('kota_id');
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('kelurahan_id');
            $table->unsignedBigInteger('kodepos_id');
            $table->string('email');
            $table->string('no_hp');
            $table->integer('pagu');
            $table->char('akreditasi');
            $table->string('kepsek');

            $table->foreign('provinsi_id')->references('id')->on('provinsi');
            $table->foreign('kota_id')->references('id')->on('kota');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahan');
            $table->foreign('kodepos_id')->references('id')->on('kodepos');
        });

        // Schema::create('password_reset_tokens', function (Blueprint $table) {
        //     $table->string('email')->primary();
        //     $table->string('token');
        //     $table->timestamp('created_at')->nullable();
        // });

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
