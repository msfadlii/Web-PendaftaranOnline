<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    public function index()
    {
        $data_sekolah = Sekolah::all();
        return view('master-data.data-sekolah.index', compact('data_sekolah'));
    }
}
