<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Periodo;

class PeriodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $periodos = array(
        array('id' => '2','nombre' => '1er semestre','fechaInicio' => '2021-06-14','fechaFin' => '2021-06-16','estado' => 'Evaluacion','rubrica_id' => '1','generacion_id' => '5'),
        array('id' => '3','nombre' => '2do semestre','fechaInicio' => '2021-06-28','fechaFin' => '2021-06-25','estado' => 'Concluido','rubrica_id' => '1','generacion_id' => '5'),
        array('id' => '4','nombre' => '1er semestre','fechaInicio' => '2021-06-02','fechaFin' => '2021-07-16','estado' => NULL,'rubrica_id' => '1','generacion_id' => '6'),
        array('id' => '5','nombre' => '2do semestre','fechaInicio' => '2021-06-02','fechaFin' => '2021-07-16','estado' => NULL,'rubrica_id' => '1','generacion_id' => '6'),
        array('id' => '6','nombre' => '3er semestre','fechaInicio' => '2021-06-26','fechaFin' => '2021-07-23','estado' => NULL,'rubrica_id' => '1','generacion_id' => '6'),
        array('id' => '8','nombre' => 'Agosto-Diembre 2020','fechaInicio' => '2021-08-09','fechaFin' => '2021-12-17','estado' => NULL,'rubrica_id' => '1','generacion_id' => '5'),
        array('id' => '9','nombre' => 'Agosto-Diembre 2020','fechaInicio' => '2021-08-09','fechaFin' => '2021-12-17','estado' => NULL,'rubrica_id' => '1','generacion_id' => '7'),
        array('id' => '10','nombre' => 'Enero -junio 2021','fechaInicio' => '2021-06-15','fechaFin' => '2021-06-06','estado' => NULL,'rubrica_id' => '1','generacion_id' => '7'),
        array('id' => '15','nombre' => 'ENERO- Junio 2021','fechaInicio' => '2021-01-01','fechaFin' => '2021-06-30','estado' => 'Inicio','rubrica_id' => '1','generacion_id' => '8'),
        array('id' => '16','nombre' => 'Primer año','fechaInicio' => '2020-01-20','fechaFin' => '2020-12-20','estado' => 'Evaluacion','rubrica_id' => '1','generacion_id' => '9'),
        array('id' => '17','nombre' => 'Prueba','fechaInicio' => '2021-01-01','fechaFin' => '2021-12-01','estado' => NULL,'rubrica_id' => '5','generacion_id' => '10')
      );
      
        foreach ($periodos  as $periodo ) {
            $Periodo = Periodo::create($periodo);
        }
    }
}
