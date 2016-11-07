<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dependencias;

class ApiDependenciasController extends Controller
{
    public function index(Request $Request){

    	//Obtiene filleables del modelo
    	$dependencia = Dependencias::get()->all();

    	//return del archivo Json
    	return response()->json([
    		'dependencias' => $dependencia
    		]);
    }

    public function getUuid($uuid){

    	$dependencia = Dependencias::where('uuid', $uuid)->get();

    	//return Json
    	return response()->json([
    		'dependencias' => $dependencia //toma el valor del uuid
    		]);
    }

	  public function store(Request $request){

         $dependencia = Dependencias::create([
            'dependencia' => $request->get('nombre_dep'),
            'uuid' =>$request->get('uuid')
            ]);
            
               $dependencias = Dependencias::all();
      // return redirect()->route('admin.dependencias.index'); 
         return response()->json([
                'Ingresando nueva dependencia' => $dependencia
            ]);

    }
}
