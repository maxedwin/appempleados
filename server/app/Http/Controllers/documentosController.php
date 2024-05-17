<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documentos;

class documentosController extends Controller
{
    public function getDocumentos(){
        return response()->json(Documentos::all(),200);
    }

    public function getDocumento($id){
        $documento = Documentos::find($id);
        if(is_null($documento)){
            return response()->json(['Mensaje' => 'Registro No Encontrado'],404);
        }
        return response()->json($documento::find($id),200);
    }
}
