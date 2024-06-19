<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.admin.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|max:16',
            'password' => 'required'
        ]);

        $dataLogin = [
            'nik' => $request->nik,
            'password' => $request->password,
        ];

        if($validator->passes()) {
            if(Auth::guard('admin')->attempt($dataLogin)){
                if(Auth::guard('admin')->user()->role != "admin"){
                    Auth::guard('admin')->logout();
                    return redirect()->route('admin.login')->with('error', 'Anda tidak memiliki akses.');
                }

                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login')->with('error', 'Username atau Password salah.');
            }
        } else {
            return redirect()->route('admin.login')
                    ->withInput()
                    ->withErrors($validator);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
