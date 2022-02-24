<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at' 
    ];

    //relacion muchos a muchos 
    public function productos(){
        return $this->belongsToMany('App\Models\Producto');
    }
}
