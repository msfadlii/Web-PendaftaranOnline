<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsi';
    
    public function sekolah()
    {
        return $this->hasMany(Sekolah::class);
    }

    public function detailUser()
    {
        return $this->hasMany(DetailUser::class);
    }
}
