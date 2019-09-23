<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Login extends Controller
{
    public function login_page()
    {
        return view('opensignal');
    }

    public function proses(Request $request)
    {
        return redirect('/login');
    }
}
