<?php

namespace App\Http\Controllers;
use GuzzleHttp;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShowTestTypeController extends Controller
{
    public function show() {
        // call APIs
        $numero = "3";
        $respuesta = Http::get("http://back-end.test/api/show-tests?type=allRecords&cantidad=".$numero);
     
        $data= (array) $respuesta->json();
        return view('showTestType',compact('data'));
    }
}
