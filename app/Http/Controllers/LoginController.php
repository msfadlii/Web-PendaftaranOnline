<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|max:16',
            'password' => 'required|min:3'
        ]);

        $dataLogin = [
            'nik' => $request->nik,
            'password' => $request->password,
        ];

        if($validator->passes()) {
            if(Auth::attempt($dataLogin)){
                return redirect()->route('user.index')->with('success', 'Login Berhasil!');
            } else {
                return redirect()->route('akun.login')->with('error', 'NIK atau Password salah.');
            }
        } else {
            return redirect()->route('akun.login')
                    ->withInput()
                    ->withErrors($validator);
        }
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function prosesRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|max:16|unique:users',
            'password' => 'required|confirmed|min:3',
            'password_confirmation' => 'required'
        ]);

        $dataLogin = [
            'nik' => $request->nik,
            'password' => $request->password,
        ];

        if($validator->passes()) {
            $user = new User();
            $user->nik = $request->nik;
            $user->password = Hash::make($request->password);
            $user->role = 'user';
            $user->save();

            return redirect()->route('akun.login')->with('success', 'Anda telah berhasil daftar akun.');
        } else {
            return redirect()->route('akun.register')
                    ->withInput()
                    ->withErrors($validator);
        }
    }

    public function logout()
    {
        // Auth::logout();    
        if(Auth::user()->role == 'user'){
            Auth::logout();
        }

        return redirect()->route('akun.login');
    }
}
