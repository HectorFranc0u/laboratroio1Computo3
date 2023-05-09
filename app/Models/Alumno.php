<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    
    static $rules = [
        'nombre' => 'required|string|min:3',
        'apellido' => 'required|string|min:3',
        'asignatura' => 'required|string|min:2',
        'edad' => 'required',
    ];
}
