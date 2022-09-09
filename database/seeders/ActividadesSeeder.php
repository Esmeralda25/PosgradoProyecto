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
        array('id' => '1','nombre' => 'Revision','etapa' => 'Enero-Septiembre','proyecto_id' => '2','periodo_id' => '15'),
        array('id' => '2','nombre' => 'Desarrollo del producto','etapa' => 'Febrero - Septiembre','proyecto_id' => '7','periodo_id' => '16'),
        array('id' => '3','nombre' => 'Depurar el producto','etapa' => 'Septiembre primer quincena','proyecto_id' => '7','periodo_id' => '16'),
        array('id' => '5','nombre' => 'Presentar Producto','etapa' => 'Segunda quincena de Septiembre','proyecto_id' => '7','periodo_id' => '16'),
        array('id' => '6','nombre' => 'Nueva Actividad','etapa' => 'marzo-junio','proyecto_id' => '6','periodo_id' => '16'),
        array('id' => '7','nombre' => 'Actividad 2','etapa' => 'marzo-junio','proyecto_id' => '6','periodo_id' => '16'),
        array('id' => '8','nombre' => 'Actividad 3','etapa' => 'marzo-junio','proyecto_id' => '6','periodo_id' => '16')
      );
      foreach ($actividades  as $actividad ) {
          $Actividad = Actividad::create($actividad);
      }
    }
}
