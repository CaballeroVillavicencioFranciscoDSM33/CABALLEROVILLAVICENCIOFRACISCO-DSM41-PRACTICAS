<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Citas extends Model
{
    use HasFactory;
    protected $fillable = [
        'especialistas_id',
        'pacientes_id',
        'servicios_id',
        'fecha_hora'
        
        
        ];
        public function Especialistas() {
            return $this->belongsTo(Especialistas::class,'especialistas_id');
        
            }
        
        public function Pacientes() {
            return $this->belongsTo(Pacientes::class,'pacientes_id');
            
            }

        public function Servicios() {
                return $this->hasOne(Servicios::class,'id','servicios_id');
            
                }
        
        use SoftDeletes;   
}
