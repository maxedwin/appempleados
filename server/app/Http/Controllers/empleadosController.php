<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class empleadosController extends Controller
{
    public function getEmpleados()
    {
        return response()->json(Empleado::all());
    }

    public function getEmpleado($id)
    {
        $empleado = Empleado::find($id);
        if (is_null($empleado)) {
            return response()->json(['Mensaje', 'Registro no Encontrado'], 404);
        }
        return response()->json($empleado::find($id));
    }

    public function insertEmpleado(Request $request)
    {
        $empleado = Empleado::create($request->all());
        return response($empleado, 200);
    }

    public function updateEmpleado(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        if (is_null($empleado)) {
            return response()->json(['Mensaje', 'Registro no Encontrado'], 404);
        }
        $empleado->update($request->all());
        return response($empleado, 200);
    }

    public function filtrarEmpleados(Request $request)
    {
        $filtro = $request->input('filtro');
        $empleadosFiltrados = Empleado::where('p_nombre', 'like', "%$filtro%")
            ->orWhere('o_nombre', 'like', "%$filtro%")
            ->orWhere('p_apellido', 'like', "%$filtro%")
            ->orWhere('s_apellido', 'like', "%$filtro%")
            ->orWhere('id_tipo_documento', 'like', "%$filtro%")
            ->orWhere('nro_documento', 'like', "%$filtro%")
            ->orWhere('id_pais', 'like', "%$filtro%")
            ->orWhere('email', 'like', "%$filtro%")
            ->orWhere('id_estado', 'like', "%$filtro%")
            ->get();
    
        return response()->json($empleadosFiltrados);
    }

    public function deleteEmpleado($id)
    {
        $empleado = Empleado::find($id);       
        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }       
        $empleado->delete();      
        return response()->json(['message' => 'Empleado eliminado correctamente'], 200);
    }
}
