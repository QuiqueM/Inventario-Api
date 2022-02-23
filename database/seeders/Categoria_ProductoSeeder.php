<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class Categoria_ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos lpos registros de la tabla pivote en la relacion muchos a muchos
        for ( $i=1;$i<=200; $i++){
            DB::table('categoria_producto')->insert([
                'producto_id' => $i,
                'categoria_id' => rand(1,10)
            ]);
        }
        
    }
}
