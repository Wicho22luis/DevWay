<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desarrolladores extends Model
{
    use HasFactory;

    public function proyectos()

    {

        return $this->hasMany(Proyectos::class);

    }
    public function tareas()

    {

        return $this->hasMany(Tareas::class);

    }
    public function eventos()

    {

        return $this->hasMany(Eventos::class);

    }
}

