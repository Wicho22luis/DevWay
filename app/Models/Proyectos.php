<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;
    public function desarrolladores()

    {

        return $this->belongsTo(Desarrolladores::class);

    }
    public function clientes()

    {

        return $this->belongsTo(Clientes::class);

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
