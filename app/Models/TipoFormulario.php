<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoFormulario extends Model
{
    use HasFactory;

    protected $table = "tipo_formulario";

    protected $fillable = [
        'descripcion',
    ];
}
