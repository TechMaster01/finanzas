<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gastos extends Model
{
    //
    use HasFactory;

    protected $table = 'gastos';

    protected $fillable = [
        'descripcion',
        'monto',
        'fecha',
        'categoria_id',
        'usuario_id'
    ];
}
