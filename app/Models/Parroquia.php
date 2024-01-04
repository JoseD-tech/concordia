<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;

    // Profesor <-- Parroquia
    public function ParroquiaProfesor() {
        return $this->hasMany(Profesor::class, 'id', 'profesor_parroquia');
    }

    // Sede <-- parroquia
    public function ParroquiaSede() {
        return $this->hasMany(Sede::class, 'id', 'Parroquia_sede');
    }
}
