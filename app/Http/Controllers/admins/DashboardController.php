<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $detailUser = $user ? $user->detailUser : null;
        
        return view('master-data.dashboard', compact('user', 'detailUser'));
    }
}
