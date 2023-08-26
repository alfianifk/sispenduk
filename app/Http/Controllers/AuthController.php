<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('admin.dashboard');
        }else{
            return view('auth.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
