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
        $user = $request -> input('username');
        $pass = $request -> input('pass');

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
                // Session::put('username',$user);
                // return redirect('menu');
                return redirect('/login');


        } catch(Exception $e){
            return \Redirect::back()->withErrors(['msg', 'The Message']);

            // echo "eh kok gaada";//wtf
        }

        // return \Redirect::back()->withErrors(['msg', 'The Message']);
        // return redirect('/login');
    }
}
