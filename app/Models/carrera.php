<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class carrera extends Model
{
    protected $fillable = [
        'nombre_carrera'
            ];
    use HasFactory, SoftDeletes;
    public function usuario()
    {
        return $this->hasMany(usuario::class);
    }
}
