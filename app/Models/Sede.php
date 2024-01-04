<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    // Profesor <-- Sede
    public function SedeProfesor() {
        return $this->hasMany(Profesor::class, 'id', 'profesor_sede');
    }

    // Sede --> Estado
    public function EstadoSede()
    {
        return $this->belongsTo(Estado::class, 'estado_sede', 'id');
    }

    // Sede --> Municipio
    public function MunicipioSede()
    {
        return $this->belongsTo(Municipio::class, 'municipio_sede', 'id');
    }

    // Sede --> Parroquia
    public function ParroquiaSede()
    {
        return $this->belongsTo(Parroquia::class, 'parroquia_sede', 'id');
    }
}
