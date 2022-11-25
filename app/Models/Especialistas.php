<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especialistas extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuarios_id',
        'nombre_completo',
        'telefono',
        'direccion',
        'descripcion'
        ];
        public function Citas() {
            return $this->hasMany(Citas::class,'especialistas_id');
        
            }

            public function Usuarios() {
                return $this->hasOne(Usuarios::class,'id','usuarios_id');
            
                }
        
        use SoftDeletes;   

}
