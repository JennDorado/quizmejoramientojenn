<?php

namespace App\Models;
use App\Models\Departamento;
use App\Models\Hijo;
use App\Models\Habilidad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    public function departamento()
    {
        return $this->belongsTo( 'App\Models\Departamento');
    }

    public function hijos()
    {
        return $this->hasMany('App\Models\Hijo');
    }

    public function habilidades()
    {
        return $this->belongsToMany('App\Models\Habilidad');
    }
}
