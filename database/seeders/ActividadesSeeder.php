<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actividad;

class ActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $actividades = array(
        array('id' => '1','nombre' => 'Revision','periodo' => 'Enero-Septiembre','proyectos_id' => '2','periodos_id' => '15'),
        array('id' => '2','nombre' => 'Desarrollo del producto','periodo' => 'Febrero - Septiembre','proyectos_id' => '7','periodos_id' => '16'),
        array('id' => '3','nombre' => 'Depurar el producto','periodo' => 'Septiembre primer quincena','proyectos_id' => '7','periodos_id' => '16'),
        array('id' => '5','nombre' => 'Presentar Producto','periodo' => 'Segunda quincena de Septiembre','proyectos_id' => '7','periodos_id' => '16'),
        array('id' => '6','nombre' => 'Nueva Actividad','periodo' => 'marzo-junio','proyectos_id' => '6','periodos_id' => '16'),
        array('id' => '7','nombre' => 'Actividad 2','periodo' => 'marzo-junio','proyectos_id' => '6','periodos_id' => '16'),
        array('id' => '8','nombre' => 'Actividad 3','periodo' => 'marzo-junio','proyectos_id' => '6','periodos_id' => '16')
      );
      foreach ($actividades  as $actividad ) {
          $Actividad = Actividad::create($actividad);
      }
    }
}
