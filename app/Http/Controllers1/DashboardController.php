<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    public function index()
    {
        $url =  'http://www.revenuesure.co.ke:8086/api/Account/GetUsers';
        $user_token=Session::get('resource');
        //dd($user_token);
        $send_token = $user_token[0]['token'];
        //dd($send_token);
        $data = [];
        $header =$send_token;
        $dataApi['landing']=json_decode($this->to_curl($url,$data,$header));
        //echo '<pre>'; print_r($data ) ; exit;
        //dd($dataApi);
        return view('welcome')->with($dataApi);
    }


    public function loginCustom(Request $request){
    $url=  'http://www.revenuesure.co.ke/RevenueSureNew/api/Account/GetToken';

    $username=$request->post("email");
    $password= $request->post('password');


    $data = array(
        'user_name'=>$username,
        'password'=>$password
    );
    // echo '<pre>'; print_r($data) ;
    $data=json_decode($this->to_curl($url,$data));
    // echo '<pre>'; print_r($data ) ; exit;

    if ($data->status_code ==200 && $data->roles=="ADMINISTRATOR"){
        $login = $data->username;
        Session::put('login', $login);
        return redirect()->route('dashboard');

    }else{
        return Redirect::back()->withErrors(['credentials mismatch', 'The Message']);
    }
}
    public  function registerRole(){
        return view('changestatus.addRole');
}
    public function storeRole(Request $request){

        $url=  'http://www.revenuesure.co.ke:8086/api/Account/AddRole';
        $role=$request->post("role");
        $data = array(
            'role_name_in _capital_letters'=>$role
        );
        //dd($data);
        // echo '<pre>'; print_r($data) ;
        $data=json_decode($this->to_curl($url,$data));
        // echo '<pre>'; print_r($data ) ; exit;
            Toastr::success('Registered successfully', 'Title', ["positionClass" => "toast-top-right"]);
            return redirect()->route('dashboard');
    }
    public function registerUser(){

        return view('changestatus.change');
    }
    public function storeUser(Request $request){
        $url=  'http://www.revenuesure.co.ke:8086/api/Account/Register';
        $first_name=$request->post("first_name");
        $middle_name= $request->post('middle_name');
        $last_name=$request->post("last_name");
        $email= $request->post('email');
        $user_name=$request->post("user_name");
        $password= $request->post('password');
        $phone_number=$request->post("phone_number");
        $role= $request->post('role');
        $data = array(
            'first_name'=>$first_name,
            'middle_name'=>$middle_name,
            'last_name'=>$last_name,
            'email'=>$email,
            'user_name'=>$user_name,
            'password'=>$password,
            'phone_number'=>$phone_number,
            'role'=>$role
        );
        //dd($data);
        // echo '<pre>'; print_r($data) ;
        $data=json_decode($this->to_curl($url,$data));
        // echo '<pre>'; print_r($data ) ; exit;
        if ($data->status_code ==200){
            Toastr::success('Registered successfully', 'Title', ["positionClass" => "toast-top-right"]);
            return redirect()->route('dashboard');

        }else{
            return redirect()->back();
        }

    }

    function to_curl($url, $data){

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
