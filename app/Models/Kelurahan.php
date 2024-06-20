<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $table = 'kelurahan';

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
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
