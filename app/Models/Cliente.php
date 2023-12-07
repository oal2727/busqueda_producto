<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $table="cliente";
    protected $fillable = [
        'empresa',
        'sector',
        'tamaño',
        'asesorAtencionId'
    ];

    public function asesor(){
        return $this->belongsTo(Asesor::class,"asesorAtencionId","id");
    }

}
