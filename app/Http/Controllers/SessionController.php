<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'nik' => 'required|max:16',
            'password' => 'required'
        ], [
            'nik.required' => 'NIK wajib diisi',
            // 'nik.min' => 'NIK harus terdiri dari 16 karakter',
            'nik.max' => 'NIK harus terdiri dari 16 karakter',
            'password.required' => 'Password wajib diisi',
        ]);

        $dataLogin = [
            'nik' => $request->nik,
            'password' => $request->password,
        ];

        if(Auth::attempt($dataLogin)){
            return redirect('admin');
        }else{
            return redirect('')->withErrors('NIK atau Password salah')->withInput();
        }
    }
}
