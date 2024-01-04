<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;


    // Profesor --> Sede
    public function ProfesorSede()
    {
        return $this->belongsTo(Sede::class, 'profesor_sede', 'id');
    }
    // Profesor --> Estado
    public function ProfesorEstado()
    {
        return $this->belongsTo(Estado::class, 'profesor_estado', 'id');
    }
    // Profesor --> Municipio
    public function ProfesorMunicipio()
    {
        return $this->belongsTo(Municipio::class, 'profesor_municipio', 'id');
    }
    // Profesor --> Parroquia
    public function ProfesorParroquia()
    {
        return $this->belongsTo(Parroquia::class, 'profesor_parroquia', 'id');
    }
}
