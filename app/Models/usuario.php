<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuario extends Model
{
    protected $fillable = [
        'nombre_completo',
        'telefono',
        'matricula',
        'correo',
        'contraseña',
        'img_perfil',
        'carrera_id',
        'type_id',
        'cuatri_id'
            ];
    use HasFactory, SoftDeletes;
    public function carrera()
    {
        return $this->belongsTo(carrera::class);
    }
    public function type()
    {
        return $this->belongsTo(typeuser::class);
    }
    public function cuatrimestre()
    {
        return $this->belongsTo(cuatrimestre::class);
    }
}
