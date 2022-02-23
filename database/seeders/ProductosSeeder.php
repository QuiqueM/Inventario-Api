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
        Producto::factory(200)->create();
    }
}
