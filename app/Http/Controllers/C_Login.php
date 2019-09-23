<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Login extends Controller
{
    public function login_page()
    {
        return view('login');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'pekerjaan' => 'required',
           'usia' => 'required|numeric'
        ]);
 
        return view('proses',['data' => $request]);
    }
}
