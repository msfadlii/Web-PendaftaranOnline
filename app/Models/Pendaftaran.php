<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran';
    protected $primaryKey = 'users_nik';
    public $incrementing = false;

    protected $fillable = [
        'users_nik', 'pilihan1_sekolah', 'pilihan2_sekolah'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_nik', 'nik');
    }

    public function pilihan1Sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'pilihan1_sekolah', 'npsn');
    }

    public function pilihan2Sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'pilihan2_sekolah', 'npsn');
    }

    public function diterimaSekolah()
    {
        return $this->belongsTo(Sekolah::class, 'diterima', 'npsn');
    }
}
