<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_servicio',
        'descripcion'
        ];
        public function Citas() {
            return $this->hasOne(Citas::class,'servicios_id');
        }
        
        use SoftDeletes; 
}
