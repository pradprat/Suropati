<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class C_Login extends Controller
{

    

    public function login_page()
    {
        return view('opensignal');
    }

    public function proses(Request $request)
    {
        function http_request($url,$type,$data){                                         
            $data_string = json_encode($data);                                                                                                                                                                                                 
            $ch = curl_init($url);                                      
            if($type=="POST"){
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);                                                                     
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string),'Accept: application/json'));

            }
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   

            $res = curl_exec($ch);
            $response_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
            $http_respond = json_decode($res, true);
            curl_close($ch);
            return array($response_code,$http_respond);
        }

        $username = $request -> input('username');
        $pass = $request -> input('pass');

        try{
            $data = array("username" => $username, "password" => $pass);
            $httprequest = http_request('http://10.54.18.213:4001/api/users/login',"POST",$data);
            $response_code = $httprequest[0];

            if ($response_code==200) {
                $http_respond = $httprequest[1];
                $key = $http_respond['id'];
                $id = $http_respond['userId'];
                // echo $key;
                //fill  the session
                // $request->session()->forget('key');
                $request->session()->flush();
                $request->session()->put('username',$username);
                $request->session()->put('key',$key);
                $request->session()->put('id',$id);

                
                $url = "http://10.54.18.213:4001/api/users/".$id."?access_token=".$key;
                $httprequest_usr = http_request($url,"GET",null);
                // echo var_dump($httprequest_usr[1]);
                $response_code_usr = $httprequest_usr[0];
                // echo $response_code_usr;
                if ($response_code_usr==200){
                    $http_respond_usr = $httprequest_usr[1];
                    $level = $http_respond_usr['level'];
                    $region = $http_respond_usr['Region'];
                    $filter = $http_respond_usr['Filter'];

                    $request->session()->put('level', $level);
                    $request->session()->put('Region', $region);
                    $request->session()->put('Filter', $filter);
                }else{
                    echo var_dump($response_code_usr);
                }
                echo $request->session()->get('level');
                // echo var_dump($response_code);

                
                
                // return redirect('/login');
            }else{
                //error message
                return \Redirect::back()->withErrors(['msg', 'The Message']);
            }

            
        } catch(Exception $e){
            // return \Redirect::back()->withErrors(['msg', 'The Message']);

            // echo "eh kok gaada";//wtf
        }

        // return \Redirect::back()->withErrors(['msg', 'The Message']);
        // return redirect('/login');
    }
}
