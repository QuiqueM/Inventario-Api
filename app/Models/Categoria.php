<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;

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
