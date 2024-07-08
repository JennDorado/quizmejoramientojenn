<?php

namespace App\Models;
use App\Models\Centro;
use App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    public function centro()
    {
        return $this->belongsTo('App\Models\Centro');
    }

    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado');
    }
}
