<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class C_Dashboard extends Controller
{
    public function osignal()
    {
        return view('opensignal');
    }

    public function index(){
    	 if(!Session::get('username')){
            // if(false){
            return redirect('welcome');
        }
        else{
            return view('opensignal');
        }
    }
    public function login(){
    	if(!Session::get('login')){
            return view('welcome');
        }
        else{
            return view('opensignal');
        }
    }
    public function loginPost(Request $request){
    	$user = $request->username;
    	$pass = $request->pwd;
    
    	$data = array("username" => $user, "password" => $pass);                                                                    
		$data_string = json_encode($data);                                                                                   
                                                                                                                     
		$ch = curl_init('http://10.54.18.213:4001/api/users/login');                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string),'Accept: application/json'));
		
		try{
			 $res = curl_exec($ch);
			 
             curl_close($ch);
             Session::put('username',$user);
             return redirect('opensignal');	
		} catch(Exception $e){
			echo "eh kok gaada";//wtf
		}
		
	}
}
