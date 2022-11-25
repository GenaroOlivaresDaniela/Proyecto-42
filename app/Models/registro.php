<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class registro extends Model
{
    protected $fillable = [
        'fecha_prest',
        'dias_prest',
        'usuario_id',
        'libro_id'
            ];
    use HasFactory, SoftDeletes;
    public function usuario()
    {
        return $this->hasMany(usuario::class);
    }
    public function libro()
    {
        return $this->ManyBelongsTo(libro::class);
    }
}
