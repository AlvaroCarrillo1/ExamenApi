<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autoridades;

class ApiAutoridadesController extends Controller
{
    //
     public function index(Request $Request){

    	//Obtiene filleables del modelo
    	$autoridad = Autoridades::get()->all();

    	//return del archivo Json
    	return response()->json([
    		'autoridades' => $autoridad
    		]);
    }
}
