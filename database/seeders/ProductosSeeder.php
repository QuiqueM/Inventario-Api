<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;



class ProductosSeeder extends Seeder
{
    /**
     * Creamos 200 productos de pruebas.
     *
     * @return void
     */
    public function run()
    { 
        //creamos 200 productos
        Producto::factory(200)->create();
    }
}
