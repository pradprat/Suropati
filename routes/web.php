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

Route::get('login','C_Login@login_page');
Route::post('login','C_Login@proses');


Route::get('opensignal','C_Dashboard@osignal');
Route::get('homepage','C_Dashboard@login');
Route::get('loginPost','C_Dashboard@loginPost');
Route::get('opensignal','C_Dashboard@index');
Route::get('homepage','C_Dashboard@homepage');

// Ookla Area
Route::get('ookla_area_monthly_3g','C_Dashboard@ookla_area_monthly_3g');
Route::get('ookla_area_monthly_4g','C_Dashboard@ookla_area_monthly_4g');

// Ookla National
Route::get('ookla_national_monthly_3g','C_Dashboard@ookla_national_monthly_3g');
Route::get('ookla_national_monthly_4g','C_Dashboard@ookla_national_monthly_4g');

// Ookla Region
Route::get('ookla_region_monthly_3g','C_Dashboard@ookla_region_monthly_3g');
Route::get('ookla_region_monthly_4g','C_Dashboard@ookla_region_monthly_4g');

// Opensignal Area
Route::get('opensignal_area_monthly_3g','C_Dashboard@opensignal_area_monthly_3g');
Route::get('opensignal_area_monthly_4g','C_Dashboard@opensignal_area_monthly_4g');

// Opensignal National
Route::get('opensignal_national_monthly_3g','C_Dashboard@opensignal_national_monthly_3g');
Route::get('opensignal_national_monthly_4g','C_Dashboard@opensignal_national_monthly_4g');

// Opensignal Region
Route::get('opensignal_region_monthly_3g','C_Dashboard@opensignal_region_monthly_3g');
Route::get('opensignal_region_monthly_4g','C_Dashboard@opensignal_region_monthly_4g');