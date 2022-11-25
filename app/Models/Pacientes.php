<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pacientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'fecha_nacimiento',
        'edad',
        'sexo',
        'domicilio',
        'codigo_postal',
        'escolaridad',
        'ocupacion',
        'religion',
        'estado_civil',
        'telefono',
        'alergias' 
        ];

    public function Citas() {
        return $this->hasMany(Citas::class,'pacientes_id');
    
        }
    use SoftDeletes;  
}
