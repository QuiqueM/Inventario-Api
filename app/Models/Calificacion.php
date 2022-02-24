<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes; //borrado logico

class Calificacion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'sumatoria_calificacion',
        'numero_calificaciones',
       
    ];
    protected $hidden = [
        'deleted_at',
    ];

    //relacion uno a uno con productos
    public function producto(){
        return $this->belongsTo('App\Models\Producto');
    }
}
