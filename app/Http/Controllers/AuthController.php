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
                return redirect('/admin');
            } elseif ($user->level == 'Guru') {
                return redirect('/guru');
            } elseif ($user->level == 'Siswa') {
                return redirect('/siswa');
            }elseif ($user->level == 'Walkes') {
                return redirect('/wali_kelas');
            }elseif ($user->level == 'Kepsek') {
                return redirect('/kepsek');
            }
        }

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
                return redirect('/admin');
            } elseif ($user->level == 'Guru') {
                return redirect('/guru');
            } elseif ($user->level == 'Siswa') {
                return redirect('/siswa');
            }elseif ($user->level == 'Walkes') {
                return redirect('/wali_kelas');
            }elseif ($user->level == 'Kepsek') {
                return redirect('/kepsek');
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
