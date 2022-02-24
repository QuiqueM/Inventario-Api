<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'sku',
        'precio',
        'cantidad',
        'estado'
    ];

    protected $hidden = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    //relacion muchos a muchos
    public function categorias(){
        return $this->belongsToMany('App\Models\Categoria');
    }

    //relacion uno a uno con calificacion
    public function calificacion(){
        return $this->hasOne('App\Models\Calificacion');
    }

    //recuperamos los productos con sus categorias y su calificacion
    public function scopeProductos($query){
        return $query->with('categorias')->with('calificacion');
    }
}
