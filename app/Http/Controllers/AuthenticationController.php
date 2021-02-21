<?php

namespace App\Http\Controllers;

class AuthenticationController extends Controller
{
    public function index(){
        $data['is_connected'] = session('is_connected');
        
        return view('/client', $data);
        

        
    }

    public function login(){
        $username = request('username');
        $password = request('password');

        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', env('HOST_URL').config('ws.LOGIN'), [
            'verify' => false,
            'headers' => [
                'Host' => 'node',
            ],
            'form_params' => [
                'username' => $username,
                'password' => $password,
            ]
        ]);

        $resultResponse = json_decode($response->getBody()->getContents());

        if($resultResponse->success){

            session(['username' => $resultResponse->result->username]);
            session(['name'=>$resultResponse->result->name]);
            session(['lastname'=>$resultResponse->result->lastname]);
            session(['mail'=>$resultResponse->result->mail]);
            session(['phone'=>$resultResponse->result->phone]);
            session(['birth'=>$resultResponse->result->birth]);
            session(['user_id' => $resultResponse->result->id]);
            session(['token' => $resultResponse->result->token]);
            session(['is_connected' => true]);
            
            #session(['isAdmin' => $resultResponse->result->is_admin]);
            #session(['pharmacy' => serialize($resultResponse->result->pharmacy)]);

            return redirect('/mon-espace');
        } else {
            session(['is_connected' => false]);
            return redirect('/login');
        }
    }
}
