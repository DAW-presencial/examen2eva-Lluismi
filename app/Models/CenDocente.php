<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{

    protected $table = "cen_docentes";

    protected $fillable = [
        'denominacion',
        'codigo',
        'CIF',
        'titularidad',
        'dir_postal',
        'cp',
        'director_nom',
        'director_apel1',
        'director_apel2',
        'identificada',
        'tipo_identificada'
    ];
}