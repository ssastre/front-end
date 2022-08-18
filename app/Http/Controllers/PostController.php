<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index() {
    // call APIs
    //$posts = Http::get("http://back-end.test/api/show-tests?type=oneRecord&id=3");
    //$respuesta = Http::get("http://mindicador.cl/api");
    //$dolar = $respuesta->json();
    //return view ('home', compact('dolar'));

    
    $respuesta = Http::get("https://jsonplaceholder.typicode.com/posts");
    // get rid of the extra NULs
    //$posts = str_replace(chr(0), '', $posts);
    //$finalPosts = utf8_encode($posts);
    //$results = json_decode($finalPosts,false, 512, JSON_UNESCAPED_UNICODE);
    $respuestaFinal = $respuesta->json();
    //var_dump($results);
    //echo "<br><br>I am here";
    //return $respuestaFinal;
    return view('show',compact('respuestaFinal'));
    
    /*
    return view("posts",[
        "posts"->$results
    ]);
    */

}

}
