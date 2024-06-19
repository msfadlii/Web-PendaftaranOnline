<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodePos extends Model
{
    use HasFactory;

    protected $table = 'kodepos';

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function sekolah()
    {
        return $this->hasMany(Sekolah::class);
    }
}
