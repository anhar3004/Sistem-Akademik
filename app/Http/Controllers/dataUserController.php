<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataUserController extends Controller
{
    public function index ()
    {
        return view('Admin.User.dataUser');
    }
}
