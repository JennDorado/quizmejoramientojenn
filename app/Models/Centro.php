<?php

namespace App\Models;
use App\Models\Departamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    public function departamentos()
    {
        return $this->hasMany('App\Models\Departamento');
    }
}

