<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable = [

        'Nombre',

        'Correo',

        'Telefono',

        'Empresa',

    ];
    public function proyectos()

    {
        return $this->hasMany(Proyectos::class);
    }
}
