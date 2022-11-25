<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cuatrimestre extends Model
{
    protected $fillable = [
        'cuatrimestre'
            ];
    use HasFactory, SoftDeletes;
    public function usuario()
    {
        return $this->hasMany(usuario::class);
    }
}
