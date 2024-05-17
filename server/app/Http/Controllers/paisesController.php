<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paises;

class paisesController extends Controller
{
    public function getPaises(){
        return response()->json(Paises::all(),200);
    }

    public function getPais($id){
        $pais = Paises::find($id);
        if(is_null($pais)){
            return response()->json(['Mensaje'=> 'Registro no encontrado'],404);
        }
        return response()->json($pais::find($id),200);
    }
}
