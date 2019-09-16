<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class C_Dashboard extends Controller
{
    public function index()
    {
        return view('opensignal');
    }
}
