<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    // Profesor <-- Estado
    public function EstadoProfesor() {
        return $this->hasMany(Profesor::class, 'id', 'profesor_estado');
    }

    // Sede <-- Estadp
    public function EstadoSede() {
        return $this->hasMany(Sede::class, 'id', 'estado_sede');
    }
}
