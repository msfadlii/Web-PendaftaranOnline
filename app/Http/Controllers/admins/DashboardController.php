<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\DetailUser;
use App\Models\Pendaftaran;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $detailUser = $user ? $user->detailUser : null;

        $dataSekolah = Sekolah::count();
        $dataSiswa = DetailUser::count();
        $dataPendaftar = Pendaftaran::count();
        
        return view('master-data.dashboard', compact('user', 'detailUser', 'dataSekolah', 'dataSiswa', 'dataPendaftar'));
    }
}
