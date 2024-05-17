<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class areaController extends Controller
{
    public function getAreas(){
        return response()->json(Area::all(),200);
    }

    public function getArea($id){
        $area = Area::find($id);
        if(is_null($area)){
            return response()->json(['Mensaje','Registro no Encontrado'],404);
        }
        return response()->json($area::find($id),200);
    }
}
