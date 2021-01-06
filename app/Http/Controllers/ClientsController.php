<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    
    public function view()
    {
        return view('login');
    }
    
    public function login()
    {
        $username = request('username');
        var_dump($username);
          
    }


}

$client = new \GuzzleHttp\Client();
    
$response = $client->request('POST', 'https://88-122-235-110.traefik.me:61001/api/user_client/loginClient', [
'headers' => [
    'Host' => 'node',
 ],
'form_params' => [
    'username' => 'romain.bechard',
    'password' => 'testpassword',
]
]);
$response->json();