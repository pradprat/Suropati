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
    SELECT TOP (1000) [Tech]
    ,[Network_id]
    ,[Operator]
    ,[User_Number]
    ,[Sample_Number]
    ,[Download_kbps]
    ,[Upload_kbps]
    ,[Latency]
    ,[DATE]
FROM [Dashboard_Data_temp].[dbo].[v_opensignal_national_monthly]
where Tech=\'4G\'  and DATE=\'201907\'
      ');
    // foreach ($ookla as $variable) {
    //     foreach ($variable as $key => $value) {
    //         echo $key . $value;
    //     }
    // }  
    
    return json_encode($ookla);
});

Route::get('/test2', function () { 

    return 'hello';
});
