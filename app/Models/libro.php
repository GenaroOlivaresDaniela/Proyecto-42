<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class libro extends Model
{
    protected $fillable = [
        'titulo_libro',
        'nombre_autor',
        'categoria_id'
            ];
    use HasFactory, SoftDeletes;
    public function categoria()
    {
        return $this->belongsTo(categoria::class);
    }

    public function registro()
    {
        return $this->ManyBelongsTo(registro::class);
    }
}
