<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CustomLoginController extends Controller
{
    public function loginCustom(Request $request){
        $url=  'http://www.revenuesure.co.ke/RevenueSure/api/Account/GetToken';

        $username=$request->post("email");
        $password= $request->post('password');
        $data = array(
            'user_name'=>$username,
            'password'=>$password
        );
        // echo '<pre>'; print_r($data) ;
        //$data=json_decode($this->to_curl($url,$data));
        $data = json_decode(stripslashes($this->to_curl($url,$data)));
        // echo '<pre>'; print_r($data ) ; exit;
dd($data);
if(empty($data)){
    return Redirect::back()->withErrors(['There is a technical error encountered, Please try again ']);
}else{
    if(!empty($data)){
         if($data->status_code == 200 && $data->roles == "GOV" or $data->roles == "SUPERADMIN" or $data->roles == "DEMO"){
            $product =collect([
                'is_login'=>1,
                'token' => $data->token,
                'roles' => $data->roles,
                'username' =>$data->username,
                "roles_list"=>$data->roles_list
            ]);
            Session::flush();
            Session::push('resource', $product);

//           $role = Session::get('resource')[0]['roles_list'];;
//            dd($role);

            return redirect()->route('dashboard');

        }else{
            return Redirect::back()->withErrors(['Your Password or Username incorrect. Please try again.', 'The Message']);
        }
    }
}
       

    }
    function to_curl($url, $data)
    {

        $headers = array
        (
            'Content-Type: application/json',
            'Content-Length: ' . strlen( json_encode($data) )
        );


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST" );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1 );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER,  $headers );

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $output = curl_exec($ch);


        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        /*if($httpcode != 200)
            {
            $this->session->set_flashdata( "error", "An error has ocurred . Try again" );
            redirect('land');
            }
        */
        curl_close($ch);
        return $output;

    }
}
