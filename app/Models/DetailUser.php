<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;

    protected $table = 'detail_users';
    protected $primaryKey = 'users_nik';
    public $incrementing = false;

    protected $fillable = [
        'users_nik',
        'nama',
        'jk_id',
        'tempatLahir',
        'tglLahir',
        'alamat',
        'rt',
        'rw',
        'provinsi_id',
        'kota_id',
        'kecamatan_id',
        'kelurahan_id',
        'kodepos_id',
        'ortu',
        'no_hp',
        'status_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_nik', 'nik');
    }

    public function jenisKelamin()
    {
        return $this->belongsTo(JenisKelamin::class, 'jk_id', 'id');
    }

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
    
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
