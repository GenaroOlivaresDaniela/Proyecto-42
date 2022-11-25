<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class libroregistro extends Model
{
    use HasFactory, SoftDeletes;
    public function libro()
    {
        return $this->hasMany(libro::class);
    }

    public function registro()
    {
        return $this->hasToMany(registro::class);
    }
}
