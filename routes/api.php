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


// API Ookla Area
Route::get('/ookla/area/{area}/network/{network}/date/{date}', function ($area,$network,$yearmonth) {
    $res_array = DB::select('
    SELECT *
    FROM [Dashboard_Data_temp].[dbo].[v_ookla_area_monthly]
    where AREA = \''.$area.'\' and network = \''.$network.'\' and yearmonth = \''.$yearmonth.'\''
    );
    return json_encode($res_array);
});

// API Ookla Region
Route::get('/ookla/region/{REGION}/network/{network}/date/{date}', function ($region,$network,$yearmonth) {
    $res_array = DB::select('
    SELECT *
    FROM [Dashboard_Data_temp].[dbo].[v_ookla_region_monthly]
    where REGION = \''.$region.'\' and network = \''.$network.'\' and yearmonth = \''.$yearmonth.'\''
    );
    return json_encode($res_array);
});

// http://localhost:8000/api/opensignal/nationwide/tech/4G/date/201907
// http://localhost:8000/api/opensignal/nationwide/tech/3G/date/201907

Route::get('/opensignal/nationwide/tech/{tech}/date/{date}', function($tech,$date){
    $res_array = DB::select('
        SELECT *
        FROM [Dashboard_Data_temp].[dbo].[v_opensignal_national_monthly]
        WHERE Tech = \''.$tech.'\' and DATE = \''.$date.'\''
    );
    return json_encode($res_array);
});

// http://localhost:8000/api/opensignal/area/SUMATERA/tech/{tech}/date/{date}
// http://localhost:8000/api/opensignal/area/JAWA%20-%20BALI%20-%20NUSRA/tech/{tech}/date/{date}
// http://localhost:8000/api/opensignal/area/JABOTABEK%20&%20JABAR/tech/{tech}/date/{date}
// http://localhost:8000/api/opensignal/area/PAMASUKA/tech/{tech}/date/{date}
// http://localhost:8000/api/opensignal/area/J/tech/{tech}/date/{date}
Route::get('/opensignal/area/tech/{tech}/date/{date}', function ($tech,$date) {
    $res_array = DB::select('
    SELECT *
    FROM [Dashboard_Data_temp].[dbo].[v_opensignal_area_monthly]
    where Tech = \''.$tech.'\' and DATE = \''.$date.'\''
    );
    return json_encode($res_array);
});

