<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //     //Login Success
            $user = Auth::user();
            if ($user->level == 'Admin') {
                return redirect('/DashboardAdmin');
                // return view('Admin.home');
            } elseif ($user->level == 'Guru') {
                // return redirect()->intended('/guru');
                return redirect('/DashboardGuru');
            }
        }

        // if ($user = Auth::user()) {
        //     if ($user->level == 'Admin') {
        //         return redirect('/DashboardAdmin');
        //     } elseif ($user->level == 'Guru') {
        //         return redirect('/DashboardGuru');
        //     }
        // }


        return view('Login.Login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
        );

        $kredensil = $request->only('username', 'password');

        if (Auth::attempt($kredensil)) {
            $user = Auth::user();
            if ($user->level == 'Admin') {
                return redirect('/DashboardAdmin');
                // return view('Admin.home');
            } elseif ($user->level == 'Guru') {
                // return redirect()->intended('/guru');
                return redirect('/DashboardGuru');
            }
            return redirect('/login');
        }

        return redirect('/login')->withInput()->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/login');
    }
}
