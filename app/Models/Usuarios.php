<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Usuarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'correo',
        'contraseña'
    
        ];
        public function Especialistas() {
            return $this->hasOne(Especialistas::class,'usuarios_id');
        }
        
        use SoftDeletes; 
}
