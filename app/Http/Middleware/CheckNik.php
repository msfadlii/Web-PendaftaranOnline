<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckNik
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('nik')) {
            return redirect()->route('login'); // Arahkan kembali ke halaman login jika nik tidak ada di sesi
        }

        return $next($request);
    }
}
