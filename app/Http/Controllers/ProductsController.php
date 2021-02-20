<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $result = $this->getProductsByPharmacy(1);
        return view('/home')->with('products', $result);
    }

    public function basket()
    {
        $result = $this->getProductsByPharmacy(1);
        return view('/basket')->with('products', $result);
    }

    public function getProductsByPharmacy($id_pharmacy)
    {
       
        $client = new \GuzzleHttp\Client();

        $response = $client->request('post', env('HOST_URL').env('GET_PRODUCTS_BY_PHARMACY'), [
            'verify' => false,
            'headers' => [
                'Host' => 'node',
            ],
            'form_params' => [
                'pharmacy_id'=> $id_pharmacy,
            ]
      
        ]);

        $resultResponse = json_decode($response->getBody()->getContents());
        
        if($resultResponse->success){
            
            return $resultResponse->result;
        } else {
            var_dump($resultResponse->error);
        }
    }
}
