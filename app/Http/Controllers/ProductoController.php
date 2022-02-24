<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Calificacion;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Muestra todos los productos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::productos()->get();
        $categorias = Categoria::all();
        return ['productos' => $productos, 'categorias' => $categorias];
    }

    /**
     * Almacena un nuevo producto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = Producto::create($request->all());
        foreach($request->categorias as $cat){
            $categoria_id = Categoria::where('nombre','=',$cat)->select('id')->first();
            $producto->categorias()->attach($categoria_id);
        }
        return response()->json(["status" => 'ok']);
    }

    /**
     * Muestra un solo producto.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * actualiza un producto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all());
        return response()->json(["status" => 'ok']);
    }

    /**
     * Elimina un producto.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return response()->json(["status" => 'ok']);
    }

    /**
     * Actualiza la valoracion del producto
     */
    public function calificacion(Request $request)
    {
        $calificacion = Calificacion::where('producto_id','=',$request->producto_id)->first();
        $calificacion->sumatoria_calificacion = ($calificacion->sumatoria_calificacion + $request->calificacion);
        $calificacion->numero_calificaciones = $calificacion->numero_calificaciones + 1;
        $calificacion->save(); 
        
        return response()->json(["status" => 'ok']);
    }
}
