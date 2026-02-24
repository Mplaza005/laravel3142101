<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Models\ResultadoSuma;

class OperacionesController extends Controller
{
    public function formulario_sumar(){
       return view('frmSuma');
    }

    public function sumar(Request $request){

    $suma = new ResultadoSuma;

    $suma->numero1=$request->numero1;
    $suma->numero2=$request->numero2;
    $suma->resultado=$request->numero1+$request->numero2;
    $suma->save();
    return $suma;

    }



}
