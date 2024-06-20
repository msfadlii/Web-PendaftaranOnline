<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function sekolah()
    {
        return $this->hasMany(Sekolah::class);
    }

    public function detailUser()
    {
        return $this->hasMany(DetailUser::class);
    }
}
