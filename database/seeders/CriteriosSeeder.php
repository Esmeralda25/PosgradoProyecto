<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Criterio;

class CriteriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $criterios = array(
        array('id' => '1','rubrica_id' => '3','descripcion' => 'Identifica el problema'),
        array('id' => '2','rubrica_id' => '3','descripcion' => 'Propone solución'),
        array('id' => '3','rubrica_id' => '1','descripcion' => 'Criterio1'),
        array('id' => '4','rubrica_id' => '1','descripcion' => 'Criterio 2'),
        array('id' => '5','rubrica_id' => '1','descripcion' => 'Criterio 3'),
        array('id' => '6','rubrica_id' => '5','descripcion' => 'El título es auto explicativo.'),
        array('id' => '7','rubrica_id' => '5','descripcion' => 'La hipotesis se puede probar'),
        array('id' => '8','rubrica_id' => '5','descripcion' => 'La hipotesis se puede probar')
      );
            
        foreach ($criterios  as $criterio ) {
            $Criterio = Criterio::create($criterio);
        }
    }
}
