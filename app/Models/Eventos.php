<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;
    public function desarrolladores()

    {

        return $this->belongsTo(Desarrolladores::class);

    }
    public function proyectos()

    {

        return $this->belongsTo(Proyectos::class);

    }
}
