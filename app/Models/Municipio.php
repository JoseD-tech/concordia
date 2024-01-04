<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    // Profesor <-- Municipio
    public function MunicipioProfesor() {
        return $this->hasMany(Profesor::class, 'id', 'profesor_municipio');
    }

    // Sede <-- Municipio
    public function MunicipioSede() {
        return $this->hasMany(Sede::class, 'id', 'municipio_sede');
    }
}
