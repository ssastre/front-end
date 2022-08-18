<?php

namespace App\Http\Controllers;
use GuzzleHttp;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShowTestTypeController extends Controller
{
    public function show() {
        // call APIs
        $numero = "1";
        $respuesta = Http::get("http://back-end.test/api/show-tests?type=allRecords&tipo_id=".$numero);
        //$respuestaFinal = $respuesta->json(); 
        // get rid of the extra NULs
        //$respuesta = str_replace('[', '', $respuesta);
       // $respuesta = str_replace(']', '', $respuesta);
        //$contents = utf8_encode($respuesta);
        //$results = json_decode($contents);
        //dd($results->data);
        //$jsonData = stripslashes(html_entity_decode($respuesta));
        $data= (array) $respuesta->json();
        
   
        //dd($data);
        /*
         if (is_array($data) ) {
          $data = "si";
        }  else  {
            $data = "no";
        }
        */
        //return compact('data');

        return view('showTestType',compact('data'));
    }
}
