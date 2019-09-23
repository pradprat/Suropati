<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    // $json = http_request('http://localhost:8000/api/test1'); 
    // print_r(json_decode($json));
    // menampilkan hasil curl
    // echo 'hello';
    return view('login');
});

Route::get('/login','C_Login@login_page');
Route::post('/login_form','C_Login@osignal');


Route::get('opensignal','C_Dashboard@osignal');
Route::get('welcome','C_Dashboard@login');
Route::get('loginPost','C_Dashboard@loginPost');
Route::get('opensignal','C_Dashboard@index');