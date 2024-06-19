<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    protected $table = 'sekolah';
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
        'kepsek'
    ];
}
