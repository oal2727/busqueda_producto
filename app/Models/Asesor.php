<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $table="asesor";
    protected $fillable = [
        'nombre',
        'correo',
        'celular',
        'clienteId',
    ];
}
