<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rubrica;

class RubricasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $rubricas = array(
        array('id' => '1','nombre' => 'Rubirca Para Evaluar','tipo' => 'Numerica','pe_id' => '2'),
        array('id' => '2','nombre' => 'Rubrica de prueba 2','tipo' => 'Alfanumerica','pe_id' => '2'),
        array('id' => '3','nombre' => 'Rubica para Aprobar','tipo' => 'Alfanumerica','pe_id' => '5'),
        array('id' => '4','nombre' => 'Rubrica de evaluacion','tipo' => 'Numerica','pe_id' => '5'),
        array('id' => '5','nombre' => 'Rubrica para aprobar una prueba','tipo' => 'Alfanumerica','pe_id' => '6'),
        array('id' => '7','nombre' => 'Rubrica para evaluar una prueba','tipo' => 'Numerica','pe_id' => '6')
      );

      foreach ($rubricas  as $rubrica ) {
            $Rubrica = Rubrica::create($rubrica);
      }
    }
}
