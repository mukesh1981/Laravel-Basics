<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class fetchApiData extends Controller
{
    function fetachJsonData()
    {
         $response = Http::get('https://reqres.in/api/users?page=2');
        return view('fetchapidata',['apidata'=>$response['data']]);
    }
    //
}
