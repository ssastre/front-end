<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EvalTestController extends Controller
{
    public function store() {
        $usuario = "1";
        $imagen = "2";
        $numero_ingresado = "5";
        $datosaguardar = "?usuario=".$usuario."imagen_id=".$imagen."num_ing=".$numero_ingresado;
        $respuesta = Http::get("http://back-end.test/api/show-tests?type=allRecords&tipo_id="."?usuario=1&imagen_id=2&num_ing=5");

        return $respuesta;

        //return view('showTestType',compact('data'));
    }
}
