<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['id', 'p_apellido', 's_apellido', 'p_nombre', 'o_nombre', 'id_pais', 'id_tipo_documento', 'nro_documento', 'email', 'fecha_ingreso', 'id_area', 'id_estado','fecha_registro'];
}
