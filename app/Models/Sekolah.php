<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    protected $table = 'sekolah';
    protected $primaryKey = 'npsn';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'npsn',
        'nama_sekolah',
        'alamat_sekolah',
        'provinsi_id',
        'kota_id',
        'kecamatan_id',
        'kelurahan_id',
        'kodepos_id',
        'email',
        'no_hp',
        'pagu',
        'akreditasi',
        'kepsek',
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function kodepos()
    {
        return $this->belongsTo(Kodepos::class);
    }

    public function pendaftaranPilihan1()
    {
        return $this->hasMany(Pendaftaran::class, 'pilihan1_sekolah', 'npsn');
    }

    public function pendaftaranPilihan2()
    {
        return $this->hasMany(Pendaftaran::class, 'pilihan2_sekolah', 'npsn');
    }
}
