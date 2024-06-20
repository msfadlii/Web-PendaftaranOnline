<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'kota';

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function sekolah()
    {
        return $this->hasMany(Sekolah::class);
    }

    public function detailUser()
    {
        return $this->hasMany(detailUser::class);
    }
}
