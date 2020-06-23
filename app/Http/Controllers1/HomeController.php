<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $client = new Client([
            'base_uri' => 'http://102.133.161.163',
        ]);
        $response = $client->post('/RevenueSure/api/Sbp/GetDashboardTopData', [
            'form_params' => [],
        ]);
        $data['sbp'] = json_decode((string) $response->getBody());
        return view('welcome')->with($data);

    }

}
