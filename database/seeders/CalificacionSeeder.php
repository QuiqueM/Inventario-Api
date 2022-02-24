<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ( $i=1;$i<=200; $i++){
            DB::table('calificacions')->insert([
                'producto_id' => $i,
                'sumatoria_calificacion' => rand(1,5),
                'numero_calificaciones' => 1
            ]);
        }
    }
}
