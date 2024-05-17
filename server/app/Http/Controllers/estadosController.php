<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estados;

class estadosController extends Controller
{
    public function getEstados(){
        return response()->json(Estados::all(),200);

    }

    public function getEstado($id){
        $estado = Estados::find($id);
        if(is_null($estado)){
            return response()->json(['Mensaje'=> 'Registro no encontrado'],404);
        }
        return response()->json($estado::find($id),200);
    }
}
