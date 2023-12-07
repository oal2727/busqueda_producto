<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadAlquiler extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table="unidad_alquiler";
    protected $fillable = [
        'codigo',
        'tipo_ua',
        'marca',
        'procesador',
        'generacion',
        'clienteId'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class,"clienteId","id");
    }

}
