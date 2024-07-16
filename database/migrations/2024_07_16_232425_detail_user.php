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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
