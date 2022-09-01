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
        array('id' => '2','titulo' => 'Proyecto de Cesar','hipotesis' => 'Hipotesis x','objetivos' => 'Objetivo del proyecto','objetivose' => 'especificos','reporte' => NULL,'avance' => NULL,'estudiante_id' => '2','comite_id' => '6','periodo_id' => NULL,'compromiso' => '0'),
        array('id' => '4','titulo' => 'Proyecto Yael','hipotesis' => 'Nueva Hipotesis','objetivos' => 'Nuevo Objetivo General','objetivose' => 'Nuevos Especificos','reporte' => NULL,'avance' => NULL,'estudiante_id' => '10','comite_id' => '1','periodo_id' => '2','compromiso' => '0'),
        array('id' => '5','titulo' => 'Proyecto de Alberto','hipotesis' => 'Hipotesis de Alberto','objetivos' => 'O general de Alberto','objetivose' => 'O espcifico de Alberto','reporte' => NULL,'avance' => NULL,'estudiante_id' => '4','comite_id' => '5','periodo_id' => '3','compromiso' => '0'),
        array('id' => '6','titulo' => 'Proyecto de Luis','hipotesis' => 'peluishipotesis','objetivos' => 'peluisobjg','objetivose' => 'peluisoe','reporte' => NULL,'avance' => NULL,'estudiante_id' => '21','comite_id' => NULL,'periodo_id' => NULL,'compromiso' => NULL),
        array('id' => '7','titulo' => 'Proyecto de Hugo','hipotesis' => 'hiptesis de hugo','objetivos' => 'obj general de hugo','objetivose' => 'o especificos de hugo','reporte' => NULL,'avance' => NULL,'estudiante_id' => '20','comite_id' => '9','periodo_id' => NULL,'compromiso' => NULL)
      );
      foreach ($proyectos  as $proyecto ) {
        $Proyecto = Proyecto::create($proyecto);
      }
    }
}
