<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evaluacion;

class EvaluacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $evaluaciones = array(
        array('id' => '5','proyecto_id' => '7','calificacion' => '100','observaciones' => NULL,'fecha' => '2021-09-24','docente_id' => '32','periodo_id' => '16'),
        array('id' => '6','proyecto_id' => '7','calificacion' => '90','observaciones' => NULL,'fecha' => '2021-09-24','docente_id' => '33','periodo_id' => '16'),
        array('id' => '7','proyecto_id' => '7','calificacion' => '80','observaciones' => NULL,'fecha' => '2021-09-24','docente_id' => '32','periodo_id' => '17'),
        array('id' => '8','proyecto_id' => '7','calificacion' => '85','observaciones' => NULL,'fecha' => '2021-09-24','docente_id' => '33','periodo_id' => '17')
      );
      foreach ($evaluaciones  as $evaluacion ) {
          $Evaluacion = Evaluacion::create($evaluacion);
      }
    }
}
