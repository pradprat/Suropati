<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// http://localhost:8000/api/test1
Route::get('/test1', function () { 
    $ookla = DB::select('
    SELECT *
FROM [Dashboard_Data_temp].[dbo].[v_opensignal_national_monthly]
where Tech=\'4G\'  and DATE=\'201907\'
      ');
    return json_encode($ookla);
});

Route::get('/opensignal/{from}/tech/{tech}/date/{date}', function ($from,$tech,$date) {
    $res_array = DB::select('
        SELECT *
        FROM [Dashboard_Data_temp].[dbo].['.$from.']
        where Tech=\''.$tech.'\'  and DATE=\''.$date.'\'
    ');
    return json_encode($res_array);
});
