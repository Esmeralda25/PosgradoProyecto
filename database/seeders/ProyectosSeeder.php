<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $proyectos = array(
        array('id' => '2','titulo' => 'Proyecto de Cesar','hipotesis' => 'Hipotesis x','objetivo' => 'Objetivo del proyecto','objetivos_especificos' => 'especificos','reporte' => NULL,'avance' => '0','estudiante_id' => '2','comite_id' => '6','periodo_id' => NULL),
        array('id' => '4','titulo' => 'Proyecto Yael','hipotesis' => 'Nueva Hipotesis','objetivo' => 'Nuevo Objetivo General','objetivos_especificos' => 'Nuevos Especificos','reporte' => NULL,'avance' => '0','estudiante_id' => '10','comite_id' => '1','periodo_id' => '2'),
        array('id' => '5','titulo' => 'Proyecto de Alberto','hipotesis' => 'Hipotesis de Alberto','objetivo' => 'O general de Alberto','objetivos_especificos' => 'O espcifico de Alberto','reporte' => NULL,'avance' => '0','estudiante_id' => '4','comite_id' => '5','periodo_id' => '3'),
        array('id' => '6','titulo' => 'Proyecto de Luis','hipotesis' => 'peluishipotesis','objetivo' => 'peluisobjg','objetivos_especificos' => 'peluisoe','reporte' => NULL,'avance' => '0','estudiante_id' => '21','comite_id' => NULL,'periodo_id' => NULL),
        array('id' => '7','titulo' => 'Proyecto de Hugo','hipotesis' => 'hiptesis de hugo','objetivo' => 'obj general de hugo','objetivos_especificos' => 'o especificos de hugo','reporte' => NULL,'avance' => '0','estudiante_id' => '20','comite_id' => '9','periodo_id' => NULL)
      );
      foreach ($proyectos  as $proyecto ) {
        $Proyecto = Proyecto::create($proyecto);
      }
    }
}
